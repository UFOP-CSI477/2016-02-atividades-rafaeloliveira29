<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Eventos;

class EventosAdminController extends Controller
{
      private $evento;
public function __construct(Eventos $evento)
{
$this->evento = $evento;
}

    public function index()
    {

        $eventos = $this->evento->paginate(10); //Paginacao paginate (numero de registros na pagina) TOP
        
        return view('admin.eventos.index',compact('eventos'));
    }

    public function create()
    {
        return view('admin.eventos.create');
    }

    public function store(Request $request)
    {
        $eventos= array_filter(array_map('trim',explode(',',$request->eventos)));
        $eventosIds= [];
        foreach($eventos as $eventoname){
            $eventosIds[] = Evento::firstOrCreate(['name' => $eventoname])->id;
        }
        $this->evento->create($request->all());
       return redirect()->route('admin.eventos.index');
    }

    public function edit($id)
    {
        $evento = $this->evento->find($id);
        return view('admin.eventos.edit',compact('evento'));
    }

    public function update($id,  $request)
    {
        $this->evento->find($id)->update($request->all());
        return redirect()->route('admin.eventos.index');
    }

    public function destroy($id)
    {
        $this->evento->find($id)->delete();
        return redirect()->route('admin.eventos.index');
        
    }
    
    
}
