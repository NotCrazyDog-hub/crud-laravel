<h1>Lista de estagiários</h1>

@foreach ($interns as $intern)
    <p>{{ $intern->name }} | <a href="{{ route('interns.create') }}">✏️</a> | <a href="">🗑️</a></p>
@endforeach