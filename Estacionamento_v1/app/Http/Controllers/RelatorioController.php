<?php

namespace App\Http\Controllers;

use App\Veiculo_Temporario;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

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
                    $veiculos = Veiculo_Temporario::all();
                    $valorpago = Veiculo_Temporario::sum('valor_pago');//valor total
                    $data = array( 'valorpago'=> $valorpago,
                                    'veiculos'=> $veiculos);

                    return view('relatorios.total')->with($data);
    }
  
public function mes()
{
 return view('relatorios.meses');
}
  public function relatoriomes( $mes)
  {
      $datames = DB::table("veiculos_temp")->whereMonth('created_at', '=', $mes)->get();
      $soma = DB::table("veiculos_temp")->whereMonth('created_at', '=', $mes)->sum('valor_pago');
      $datatotal = array('valortotal'=>$soma,
                         'veiculos'=>$datames);
      return view('relatorios.relatoriomes')->with($datatotal);
      
  }
  public function relatoriodia()
  {
      $datames = DB::table("veiculos_temp")->whereDate('created_at', '=', Carbon::today())->get();
      $soma = DB::table("veiculos_temp")->whereDate('created_at', '=', Carbon::today())->sum('valor_pago');
      $datatotal = array('valortotal'=>$soma,
                         'veiculos'=>$datames);
      return view('relatorios.relatoriodia')->with($datatotal);
      
  }
  public function anos()
{
 return view('relatorios.anos');
}
    public function relatorioanos($ano)
  {
      $datames = DB::table("veiculos_temp")->whereYear('created_at', '=', $ano)->get();
      $soma = DB::table("veiculos_temp")->whereYear('created_at', '=', $ano)->sum('valor_pago');
      $datatotal = array('valortotal'=>$soma,
                         'veiculos'=>$datames);
      return view('relatorios.relatorioanos')->with($datatotal);
      
  }
// public function showmonth($mes){


// //        
// //     
// //     
// //                     

// }
    
}
