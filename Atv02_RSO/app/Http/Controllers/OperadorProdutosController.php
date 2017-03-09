<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Produto;

class OperadorProdutosController extends Controller
{
      private $produto;
public function __construct(Produto $produto)
{
$this->produto = $produto;
}

    public function index()
    {

        $produtos = $this->produto->paginate(5); //Paginacao paginate (numero de registros na pagina) TOP
        
        return view('operador.produtos.index',compact('produtos'));
    }

  
    public function store(Request $request)
    {
        $produtos= array_filter(array_map('trim',explode(',',$request->produtos)));
        $produtosIds= [];
        foreach($produtos as $produtoname){
            $produtosIds[] = Produto::firstOrCreate(['name' => $produtoname])->id;
        }
        $this->produto->create($request->all());
       return redirect()->route('operador.produtos.index');
    }

    public function edit($id)
    {
        $produto = $this->produto->find($id);
        return view('operador.produtos.edit',compact('produto'));
    }

    public function update($id, Request $request)
    {
        $this->produto->find($id)->update($request->all());
        return redirect()->route('operador.produtos.index');
    }

    
    
}
