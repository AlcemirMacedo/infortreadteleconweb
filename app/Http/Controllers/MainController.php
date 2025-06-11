<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    const usuario = ["name" => "Alcemir"];

    public function index(){
        return view('homeView', self::usuario );
    }

    public function stfolha(){
        return view('stfolha', self::usuario);
    }
}
