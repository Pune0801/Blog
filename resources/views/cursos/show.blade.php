@extends('layouts.plantilla')

@section('title', 'Curso' . $curso->name)

@section('Content')
    <h1>Bienvenido al curso de {{ $curso->name }}</h1>
    <a href="{{route('cursos.index')}}">Volver a los cursos</a><br/>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p>Categoria: {{$curso->category}}</p>
    <p>Descripcion: {{$curso->description}}</p>
    <br>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
@endsection
