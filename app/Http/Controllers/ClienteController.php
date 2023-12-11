<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente=cliente::all();
        return view("cliente.index",compact("cliente"));
        //
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
        $cliente=new Cliente();
        $cliente->nom_empresa=$request->input("nombre");
        $cliente->per_contacto=$request->input("contacto");
        $cliente->direccion=$request->input("direccion");
        $cliente->telefono=$request->input("telefono");
        $cliente->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idCliente)
    {
        $cliente=Cliente::find($idCliente);
        $cliente->nom_empresa=$request->input("nombre");
        $cliente->per_contacto=$request->input("contacto");
        $cliente->direccion=$request->input("direccion");
        $cliente->telefono=$request->input("telefono");
        $cliente->Update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idCliente)
    {
        $cliente= Cliente::find( $idCliente );
        $cliente->delete();
        return redirect()->back();
        //
    }
}
