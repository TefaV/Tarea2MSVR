<h1>Editoriales</h1>

@foreach($publishers as $publisher)
    <div>
        <h3>{{ $publisher->name }}</h3>
        País: {{ $publisher->country }}<br>
        Fundación: {{ $publisher->founded }}<br>
        Género: {{ $publisher->genre }}<br>
        Libros:
        <ul>
            @foreach($publisher->books as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
    </div>
@endforeach

<hr>
<a href="/books">Ver Libros</a> |
<a href="/authors">Ver Autores</a>

