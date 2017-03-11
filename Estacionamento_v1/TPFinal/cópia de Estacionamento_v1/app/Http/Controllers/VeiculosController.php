<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo_Permanente;
use App\Veiculo_Temporario;

class VeiculosController extends Controller
{
    //Deve gerenciar operacoes EDIT, CREATE, DELETE, UPDATE()
    public function __construct()
    {
        $this->middleware('auth');
    }

public function index()
    {
        $veiculos = Veiculo_Temporario::all();
        
        return view('veiculos.index')->with('veiculos',$veiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Veiculo_Temporario::create($request->all());
        
        return redirect('/veiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $veiculo = Veiculo_Temporario::find($id);
        return view('veiculos.show')
        ->with('veiculo',$veiculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $veiculo = Veiculo_Temporario::find($id);
        return view('veiculos.edit')
        ->with('veiculo',$veiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $veiculo = Veiculo_Temporario::find($id);
        $veiculo->veiculo_placa = $request->veiculo_placa;
        $veiculo->veiculo_modelo = $request->veiculo_modelo;
        $veiculo->veiculo_tipo = $request->veiculo_tipo;
        $veiculo->tempo_estadia = $request->tempo_estadia;
        $veiculo->operador_responsavel = $request->operador_responsavel;
        $veiculo->valor_pago = $request->valor_pago;
        $veiculo->updated_at = $request->updated_at;
        $veiculo->created_at = $request->created_at;
        $veiculo->save();
     

        return redirect('/veiculos');
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Veiculo_Temporario::destroy($id);
        return redirect('/veiculos');
    }

    public function finalizar($id)
    {
       $veiculo = Veiculo_Temporario::find($id);
       $entradasegundos= date("s",strtotime($veiculo->created_at));
       $entradaminutos= date("m",strtotime($veiculo->created_at));
       $entradahoras= date("h",strtotime($veiculo->created_at));
       $saidareal = date('Y-m-d h:i:s');
       $saidasegundos= date("s",strtotime($veiculo->updated_at));
       $saidaminutos= date("m",strtotime($veiculo->updated_at));
       $saidahoras= date("h",strtotime($veiculo->updated_at));

      //Calculo da diferneça entre entrada e saida dado em minutos'
       $entrada = strtotime( $veiculo->created_at );
        $saida   = strtotime( $veiculo->updated_at );
        $diferenca = ($saida - $entrada);
       $tempo_estadia = $diferenca/60;
        
//calculos do valor pago , tempo de estadia e registro da saida 
       $valor_pago = ($diferenca/60%60)*(6);
       $veiculo->tempo_estadia = $tempo_estadia;//calcular
       $veiculo->valor_pago = $valor_pago;
       $veiculo->updated_at = $saidareal;
       
       //salva na tabela veiculos_rel
       $vaiprorelatorio = Veiculo_Permanente::create();
       $vaiprorelatorio->veiculo_placa = $veiculo->veiculo_placa;
       $vaiprorelatorio->veiculo_id=$veiculo->id;
       $vaiprorelatorio->tempo_estadia = $tempo_estadia;
       $vaiprorelatorio->operador_responsavel = $veiculo->operador_responsavel;
       $vaiprorelatorio->valor_pago = $valor_pago;
       $vaiprorelatorio->save();

       $veiculo->save();
       
        return redirect('/veiculos');
        
    }
    /*
    public function index(){
        //tela inicial do sistema
    }
    public function create(){
        //adiciona veiculo em 2 tabelas
    }
    public function store(){
        //armazena no banco em 2 tabelas
    }
    public function delete(){
        //deletar o veiculo de uma tabela
    }
    public function update(){
        //ARmazenar hora de saida do veiculo e calcular o valor total atualizando a tabela veiculos_perm e gravando todos os dados em 
        // veiculos_rel ao clique de um botao
    }*/
}
