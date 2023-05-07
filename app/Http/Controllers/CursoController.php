<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCursoRequest;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate(5);

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function store(StoreCursoRequest $request)
    {

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCursoRequest $request, Curso $curso)
    {
       
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy (Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
