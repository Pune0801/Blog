@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('Content')
    <h1>Bienvenido a la pagina para editar cursos</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label>Nombre</label><br />
        <input type="text" name="name" value="{{ old('name', $curso->name) }}"><br />
        @error('name')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <label>Descripcion</label><br />
        <textarea name="description" cols="30" rows="10">{{ old('description', $curso->description) }}</textarea><br />
        @error('description')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <label>Categoria</label><br />
        <input type="text" name="category" value="{{ old('category', $curso->category) }}"><br />
        @error('category')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <button>Actualizar</button>
    </form>
@endsection
