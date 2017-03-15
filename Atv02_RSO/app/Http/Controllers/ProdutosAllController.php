<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosAllController extends Controller
{public function __construct()
    {
        $this->middleware('auth');
    }
     
    //Exibe produtos para todos os usuarios sem autenticação'
     public function index()
    {
        $produtosall = \App\Produto::all();
        return view('produtosall.index',compact('produtosall'));
    }
    public function comprar()
    {
         // mostr os dados da sessao.
        //gravar elemento na secao
        //session()->forget('nome');//limpa o nome
       // session(['nome'=>'rafael']);
       $carrinho = array(
    'produto 1'=>'produto teste',
    'produto 2'=> 'produto teste 2',
    'produto 3'=> 'produto teste 3',
    'produto 4'=> 'produto teste 4',
    'produto 5'=> 'produto teste 5',
    'produto 6'=> 'produto teste 6'
     );
    

    session(['carrinho'=> $carrinho]);

    //    return view('produtosall.carrinho')->with('compras',$carrinho);
    //dd(session()->all());
    return view('produtosall.carrinho')->with('carrinho', $carrinho);
    }
}
