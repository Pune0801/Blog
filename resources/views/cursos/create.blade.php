@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('Content')
    <h1>Bienvenido a la pagina para crear cursos</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>Nombre</label><br />

        <input type="text" name="name" value="{{old('name')}}"><br />
        @error('name')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <label>Descripcion</label><br />

        <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea><br />
        @error('description')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <label>Categoria</label><br />

        <input type="text" name="category" value="{{old('category')}}"><br />
        @error('category')
            <small>{{ $message }}</small>
            <br>
        @enderror
        <button>Enviar</button>
    </form>
@endsection
