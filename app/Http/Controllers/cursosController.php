<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importamos nuestro modelo de cursos que este dentro de la base de datos
use App\Models\cursos;

class cursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCursos = cursos::all();
        return $allCursos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCursos = new cursos();
        $newCursos->Name = $request->Name;
        $newCursos->Date_start = $request->Date_start;
        $newCursos->Date_end = $request->Date_end;
        $newCursos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updateCursos = cursos::findOrFail($request->id);
        $updateCursos->Name = $request->Name;
        $updateCursos->Date_start = $request->Date_start;
        $updateCursos->Date_end = $request->Dane_end;
        $updateCursos->save();
        return $updateCursos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyCursos = cursos::destroy($request->id);
        return $destroyCursos;
    }
}
