<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Produto;
use Session;
use Auth;

//ProdutosADMIN

class ProdutosController extends Controller
{
     
      private $produto;
public function __construct(Produto $produto)
{
        $this->middleware('auth');
    
$this->produto = $produto;
}


    public function index()
    {
        
        $produtos = $this->produto->paginate(10); //Paginacao paginate (numero de registros na pagina) TOP
        return view('admin.produtos.index',compact('produtos'));
       
    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(Request $request)
    {
        $produtos= array_filter(array_map('trim',explode(',',$request->produtos)));
        $produtosIds= [];
        foreach($produtos as $produtoname){
            $produtosIds[] = Tag::firstOrCreate(['name' => $produtoname])->id;
        }
        $this->produto->create($request->all());
       return redirect()->route('admin.produtos.index');
    }

    public function edit($id)
    {
        $produto = $this->produto->find($id);
        return view('admin.produtos.edit',compact('produto'));
    }

    public function update($id, Request $request)
    {
        $this->produto->find($id)->update($request->all());
        return redirect()->route('admin.produtos.index');
    }

    public function destroy($id)
    {
        $this->produto->find($id)->delete();
        return redirect()->route('admin.produtos.index');
        
    }
    
}
