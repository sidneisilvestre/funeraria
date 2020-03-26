<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
	return view("lista_eventos",["listaEventos"=>$eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cadastro_eventos");
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
        $evento = new Evento;
		$evento->nome = $request->nome;
		$evento->carteirinha = $request->cart;
		$evento->nascimento = $request->nasc;
    $evento->save();
	return redirect()->action("EventoController@index");
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
	return view("edite_eventos",["evento"=>$evento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        		$evento->nome = $request->nome;
		$evento->carteirinha = $request->cart;
		$evento->nascimento = $request->nasc;
    $evento->save();
	return redirect()->action("EventoController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
		return redirect()->action("EventoController@index");
    }
}
