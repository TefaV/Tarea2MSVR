<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = [
            (object)[
                'id' => 1,
                'name' => 'Abraham Silberschatz',
                'nationality' => 'Israeli / American',
                'birth_year' => 1952,
                'fields' => 'Database Systems, Operating Systems',
                'books' => ['Operating System Concepts', 'Database System Concepts']
            ],
            (object)[
                'id' => 2,
                'name' => 'Andrew S. Tanenbaum',
                'nationality' => 'Dutch / American',
                'birth_year' => 1944,
                'fields' => 'Distributed computing, Operating Systems',
                'books' => ['Computer Networks', 'Modern Operating Systems']
            ]
        ];

        return view('authors.index', compact('authors'));
    }
}
