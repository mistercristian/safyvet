<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactenosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactenos= Contactos::all();
        return view('contactenos.index',['contactenos'=>$contactenos]);
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
        $contacto = new Contactos();
        $contacto->nombre = $request->name;
        $contacto->email = $request->email;
        $contacto->comentario = $request->message;
        $contacto->save();

        return redirect()->route('contactenos.index');
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
