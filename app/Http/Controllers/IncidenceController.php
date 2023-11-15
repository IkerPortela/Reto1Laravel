<?php

namespace App\Http\Controllers;

use App\Models\Incidence;
use App\Models\Comments;
use Illuminate\Http\Request;

class IncidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidences = Incidence::all();
        return view('incidences.index',['incidences' => $incidences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incidences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incidence = new Incidence();
        $incidence->titulo = $request->titulo;
        $incidence->texto = $request->texto;
        $incidence->publicado = $request->has('publicado');
        $incidence->user_id = $request->user()->id;
        $incidence->category_id = $request->category_id;
        $incidence->department_id = $request->department_id;
        $incidence->save();
        return redirect()->route('incidences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidence $incidence)
    {
        $comments = Comments::all();
        return view('incidences.show',compact(['incidence','comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidence $incidence)
    {
        return view('incidences.edit',['incidence'=>$incidence]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidence $incidence)
    {
        $incidence->titulo = $request->titulo;
        $incidence->texto = $request->texto;
        $incidence->publicado = $request->has('publicado');
        $incidence->category_id = $request->category_id;
        $incidence->department_id = $request->department_id;
        $incidence->save();
        return view('incidences.show',['incidence'=>$incidence]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidence $incidence)
    {
        $incidence->delete();
        return redirect()->route('incidences.index');

    }
}
