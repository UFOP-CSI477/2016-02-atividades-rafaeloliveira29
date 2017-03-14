<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosAllController extends Controller
{
     
    //Exibe produtos para todos os usuarios sem autenticação'
     public function index()
    {
        $produtosall = \App\Produto::all();
        return view('produtosall.index',compact('produtosall'));
    }
    public function comprar(request $compra)
    {
         //dd($request->session()-all()); mostr os dados da sessao.
        //gravar elemento na secao
        //session()->forget('nome');//limpa o nome
       // session(['nome'=>'rafael']);
       $carrinho = array(
    'produto'=>$compra,//$produtocompra->nome,
);
       session(['carrinho'=> $carrinho]);

       return view('produtosall.carrinho')->with('compras',$carrinho);
    }
}
