<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtletaController extends Controller
{
    public function inscricao()
    {
        //
         $eventos = \App\Eventos::all();
        return view('atleta.inscricao',compact('eventos'));
    }
    public function atletas()
    {
        $atletas = \App\Atleta::all();
        return view('admin.atletas',compact('atletas'));
        
    }
    public function index()
    {
        return view('atleta.index');
        
    }
}
