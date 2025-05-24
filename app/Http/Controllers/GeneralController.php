<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function proyectos(){
        return view('web.proyectos');
    }

    public function sobreMi(){
        return view('web.sobre-mi');
    }

    public function contacto(){
        return view('web.contacto');
    }


}
