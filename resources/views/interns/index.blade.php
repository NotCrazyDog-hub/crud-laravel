<h1>Lista de estagiários</h1>
<a href="{{ route('interns.create') }}">+ Adicionar</a>
@foreach ($interns as $intern)
    <p>{{ $intern->name }} | <a href="{{ route('interns.edit') }}">✏️</a> | <a href="">🗑️</a></p>
@endforeach