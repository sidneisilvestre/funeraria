<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atendimentos = Atendimento::all();
	return view("lista_atendimentos",["listaAtendimentos"=>$atendimentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cadastro_atendimentos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     request filtra os dados para enviar para o bancoo 
	 */
    public function store(Request $request)
    {
        $atendimento = new Atendimento;
		$atendimento->nome = $request->nome;
		$atendimento->carteirinha = $request->cart;
		$atendimento->nascimento = $request->nasc;
    $atendimento->save();
	return redirect()->action("AtendimentoController@index");
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function show(Atendimento $atendimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Atendimento $atendimento)
    {
	return view("edite_atendimentos",["atendimento"=>$atendimento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atendimento $atendimento)
    {
        		$atendimento->nome = $request->nome;
		$atendimento->carteirinha = $request->cart;
		$atendimento->nascimento = $request->nasc;
    $atendimento->save();
	return redirect()->action("AtendimentoController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atendimento $atendimento)
    {
        $atendimento->delete();
		return redirect()->action("AtendimentoController@index");
    }
}
