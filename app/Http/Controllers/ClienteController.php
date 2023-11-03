<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertarGet(Request $request)
    {
        if(count($request->old())===0) {
            $cli=new Cliente();
        } else {
            $cli=new Cliente($request->old());
        }

        
        return view("cliente",['cli'=>$cli]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertarPost(StoreClienteRequest $request)
    {
        $cli=new Cliente($request->all());
        $cli->save();
        echo "ok, datos guardados";
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
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
