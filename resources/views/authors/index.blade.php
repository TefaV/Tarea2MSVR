<h1>Autores</h1>

@foreach($authors as $author)
    <div>
        <h3>{{ $author->name }}</h3>
        Nacionalidad: {{ $author->nationality }}<br>
        Año de nacimiento: {{ $author->birth_year }}<br>
        Áreas: {{ $author->fields }}<br>
        Libros:
        <ul>
            @foreach($author->books as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
    </div>
@endforeach

<hr>
<a href="/books">Ver Libros</a> |
<a href="/publishers">Ver Editoriales</a>
