<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosAllController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    //Exibe produtos para todos os usuarios sem autenticação'
     public function index()
    {
        $produtosall = \App\Produto::all();
        return view('produtosall.index',compact('produtosall'));
    }
}
