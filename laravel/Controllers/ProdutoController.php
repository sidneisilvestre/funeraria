<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
	return view("lista_produtos",["listaProdutos"=>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cadastro_produtos");
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
        $produto = new Produto;
		$produto->nome = $request->nome;
		$produto->carteirinha = $request->cart;
		$produto->nascimento = $request->nasc;
    $produto->save();
	return redirect()->action("ProdutoController@index");
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
	return view("edite_produtos",["produto"=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        		$produto->nome = $request->nome;
		$produto->carteirinha = $request->cart;
		$produto->nascimento = $request->nasc;
    $produto->save();
	return redirect()->action("ProdutoController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
		return redirect()->action("ProdutoController@index");
    }
}
