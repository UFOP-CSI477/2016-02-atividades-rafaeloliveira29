<?php

namespace App\Http\Controllers;

use App\Veiculo_Permanente;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
                    return view('relatorios.index');
        
    }
    public function show()
    {
                    $veiculos = Veiculo_Permanente::all();
                    $valorpago = Veiculo_permanente::sum('valor_pago');
                    $data = array( 'valorpago'=> $valorpago,
                                    'veiculos'=> $veiculos);

                    return view('relatorios.total')->with($data);
    }
public function showmonth($mes){


       $data = DB::table("veiculos_rel")
    ->whereMonth('created_at', '=', $mes)
    ->get();
                    return view('relatorios.pormes')->with('consultapormes',$data);

}
    
}
