<?php

namespace App\Http\Controllers;
use App\Motorista;
class MotoristasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function MostrarMotoristas(){
        return Motorista::all()->toJson();
    }

    //
}
