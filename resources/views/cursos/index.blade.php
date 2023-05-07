@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('Content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    </h1>
    <a href="{{ route('cursos.create') }}">Crear Cursos</a>
    <ul>
        @foreach ($cursos as $curso)
            <a href="{{ route('cursos.show', $curso) }}">
                <li>{{ $curso->name }}</li>
            </a>
        @endforeach
    </ul>
    {{ $cursos->links() }}


@endsection
