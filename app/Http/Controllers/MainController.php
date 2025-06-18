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

    public function cconline(){
        return view('cconline', self::usuario);
    }

    public function sam(){
        return view('sam', self::usuario);
    }

    public function ienotas(){
        return view('ienotas', self::usuario);
    }

    public function ilicitacao(){
        return view('ilicitacao', self::usuario);
    }

    public function ice(){
        return view('ice', self::usuario);
    }

    public function ipatrimonial(){
        return view('ipatrimonial', self::usuario);
    }

    public function iprotocolo(){
        return view('iprotocolo', self::usuario);
    }

    public function consultoria(){
        return view('consultoria', self::usuario);
    }
}
