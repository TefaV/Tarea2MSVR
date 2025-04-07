
<h1 class="text-3xl font-semibold mb-6 text-gray-800">Listado de Libros</h1>

<ul class="space-y-6">
    @forelse($books as $book)
        <li class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <strong class="text-xl text-gray-800">{{ $book->title }}</strong> 
            ({{ $book->edition }} edición, {{ $book->copyright }})<br>
            Idioma: {{ $book->language }}, Páginas: {{ $book->pages }}
        </li>
    @empty
        <!-- Skeleton Loading -->
        <li class="skeleton w-full h-16 bg-gray-300 rounded-lg mb-4"></li>
        <li class="skeleton w-full h-16 bg-gray-300 rounded-lg mb-4"></li>
        <li class="skeleton w-full h-16 bg-gray-300 rounded-lg mb-4"></li>
        <li class="skeleton w-full h-16 bg-gray-300 rounded-lg mb-4"></li>
    @endforelse
</ul>

<hr class="my-6 border-t-2 border-gray-200">

<a href="/authors" class="text-blue-500 hover:underline">Ver Autores</a> |
<a href="/publishers" class="text-blue-500 hover:underline">Ver Editoriales</a>
