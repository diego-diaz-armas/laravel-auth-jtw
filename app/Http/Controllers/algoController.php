<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class algoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        //para el middleware
        function mostrarProductos(){
            return "lista de productos";
        }
        function noAdmin(){
            return "no tiene acceso a la lista de productos";
        }
        //fin de el middleware

    public function index()
    {
        return "hola controlador algoController desde la funcion INDEX CUIDADO CON LOS NOMBRES ";
    }



    //public function nuevaR($id){
        //return "el id recibido es:".$id;
    //}

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
        //
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
