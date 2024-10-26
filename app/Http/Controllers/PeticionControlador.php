<?php

namespace App\Http\Controllers;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class PeticionControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pqrs=Pqrs::all();
        return view('peticion.index',['pqrs'=>$pqrs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pqrs=new Pqrs();
        $pqrs->nombre=$request->nombre;
        $pqrs->email=$request->email;
        $pqrs->pqrs=$request->pqrs;
        $pqrs->asunto=$request->asunto;
        $pqrs->comentario=$request->comentario;
        $pqrs->save();

        return redirect()->route('peticiones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
