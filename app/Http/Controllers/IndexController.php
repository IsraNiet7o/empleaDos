<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index1');
    }

    public function preguntasUser(){

        return view('frontend.pruguntas_usuario');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.crear_contacto');
    }


    public function getCuenta()
    {
        return view('frontend.recuperar_cuenta');
    }

    public function changeCuenta()
    {
        return view('aspirantes.content.change_cuenta');
    }

    public function anunciosCompany()
    {
        return view('frontend.anuncios');
    }
}
