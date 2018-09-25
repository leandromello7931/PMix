<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemMistura;

use App\Ingrediente;

use App\Mistura;

use DB;

class ItemMisturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $list_itens_mistura = ItemMistura::with('ingredientes')->with('nutrientes')->where('id_mistura', '=', $id)->get();
        // $list_ingredientes_mistura = ItemMistura::with('ingredientes')->where('id_mistura', '=', $id)->get();
        $list_ingredientes_mistura = DB::table('ingredientes')
                                    ->join('itens_mistura', 'ingredientes.id', '=', 'itens_mistura.id_ingrediente')
                                    ->where('itens_mistura.id_mistura', '=', $id)
                                    ->select('ingredientes.*')
                                    ->distinct()
                                    ->get();
                                    // select distinct(id_ingrediente) id_ingrediente, nome, custo from ingredientes JOIN itens_mistura on (itens_mistura.id_ingrediente = ingredientes.id and id_mistura = 3)

        $list_restricoes_nutrientes_mistura = DB::table('nutrientes')
                                            ->join('misturas_restricoes', 'nutrientes.id', '=', 'misturas_restricoes.id_nutriente')
                                            ->where('misturas_restricoes.id_mistura', '=', $id)
                                            ->select('nutrientes.*', 'misturas_restricoes.id', 'misturas_restricoes.valor_restricao')
                                            ->distinct()
                                            ->get();
        // dd($list_restricoes_nutrientes_mistura);
        return view('mistura.itens.add_itens_mistura', [
            'id_mistura' => $id, 
            'list_itens_mistura' => $list_itens_mistura, 
            'list_ingredientes_mistura' => $list_ingredientes_mistura,
            'list_restricoes_nutrientes_mistura' => $list_restricoes_nutrientes_mistura
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {   
        $list_itens_mistura = ItemMistura::where('id_mistura', '=', $id)->get();
        dd($request->id_item_mistura);
        dd( $list_itens_mistura);
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
    }
}
