<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo_Permanente;
use App\Veiculo_Temporario;
use Carbon\Carbon;
use App\Http\Requests\InserirVeiculoFormRequest;
use Illuminate\Support\Facades\Validator;
use Session;

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
    public function store(request $request)
    {
        //dd($request->all());
        
        
        if($request->veiculo_placa == null || $request->veiculo_modelo==null || $request->veiculo_tipo ==null)
         {
             $erro ="Existem Campos Vazios!!!\nFavor Retornar,preencher todos os campos e tentar novamente!!";
            return view('veiculos.erro')->with('erro',$erro);
       }
         else if($request->veiculo_placa !=null && $request->veiculo_modelo!=null && $request->veiculo_tipo != null)
         {
             if(preg_match("/([A-Za-z]{3}\-[0-9]{4})/", $request->veiculo_placa) )
        {
           
         Veiculo_Temporario::create($request->all());
        
        return redirect('/veiculos');
         }else
         {
                $erro = "A placa foi digitada incorretamente! utilize 3 letras, o divisor '-' e 4 numeros!!";
              return view('veiculos.erro')->with('erro',$erro);
            
       
         }
         }
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
    public function update(request $request, $id)
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
       

      //Calculo da diferneça entre entrada e saida dado em minutos'
       $entrada = Carbon::parse( $veiculo->created_at );
        $saida = Carbon::parse($veiculo->updated_at);
        $tempo_estadia = $saida->diffInMinutes($entrada);
        //$diferenca = ($saida - $entrada);
       //$tempo_estadia = $diferenca/60;
//calculos do valor pago , tempo de estadia e registro da saida 
       $saida_real = Carbon::now();
       //60 minutos é 6 reais
       //1 minuto - >0,1
       $valor_pago = ($tempo_estadia)*(0.1);
       if($tempo_estadia>1440){
           $dias = $tempo_estadia; //calcula quanto dis o cara ficou no estacionamento se o numero de minutos foi maior q um dia,
                                        //para calcular o desconto se der uma diaria.
                                        //1440 - 100;
            //1 - >0.069
            $valor_desconto_diaria = $dias *0.069;
            $veiculo->valor_pago = $valor_desconto_diaria;

       }else{
       $veiculo->valor_pago = $valor_pago;

       }
       $veiculo->tempo_estadia = $tempo_estadia;//calcular
       $veiculo->updated_at = $saida_real;
       $veiculo->status = 0;
       $veiculo->save();
       
       

       return view('veiculos.finalizado')
        ->with('veiculo',$veiculo);
        
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
