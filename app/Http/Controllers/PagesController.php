<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function saludos($nombre = "Invitado"){
        return view('saludos',compact('nombre'));
    }
    public function contactos(){
        return view('contactos');
    }
}
