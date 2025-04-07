<?php

namespace App\Http\Controllers;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = [
            (object)[
                'id' => 1,
                'name' => 'John Wiley & Sons',
                'country' => 'United States',
                'founded' => 1807,
                'genre' => 'Academic',
                'books' => ['Operating System Concepts', 'Database System Concepts']
            ],
            (object)[
                'id' => 2,
                'name' => 'Pearson Education',
                'country' => 'United Kingdom',
                'founded' => 1844,
                'genre' => 'Education',
                'books' => ['Computer Networks', 'Modern Operating Systems']
            ]
        ];

        return view('publishers.index', compact('publishers'));
    }
}
