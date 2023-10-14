<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class grupoRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "hola index ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return "hola esta es el create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //Request $request estaba dentro de los parentesis del show lo sacamos para proobar return solo
        return "hola esta es el store";
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //string $id estaba dentro de los parentesis del show lo sacamos para proobar return solo
        return "hola esta es el show";


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //string $id estaba dentro de los parentesis del show lo sacamos para proobar return solo
        return "hola esta es el edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //Request $request, string $id estaba dentro de los parentesis del show lo sacamos para proobar return solo
        return "hola esta es el update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    //string $idestaba dentro de los parentesis del show lo sacamos para proobar return solo
    return "hola esta es el destroy";
    }
}
