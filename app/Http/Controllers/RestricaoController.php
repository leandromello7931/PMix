<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restricao;

class RestricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_restricoes = Restricao::paginate(25);
        return view('restricoes.index', [
            'restricoes' => $list_restricoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restricoes.add_restricao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required'
        ]);

        $data = [
            'nome' => $request->nome,
        ];
        Restricao::create($data);

        return redirect()->action('RestricaoController@index')->with('success', 'Restrição adicionada com sucesso');
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
        $restricao = Restricao::find($id);
        return view('restricoes.edit_restricao')->with('restricao', $restricao);
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
        $this->validate($request,[
            'nome' => 'required'
        ]);

        //update nutriente
        $restricao = Restricao::find($id);
        $restricao->nome = $request->input('nome');
        $restricao->save();

        return redirect()->action('RestricaoController@index')->with('success', 'Restrição atualizada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restricao = Restricao::find($id);
        $restricao->delete();
        return redirect()->action('RestricaoController@index')->with('success', 'Restrição excluída com sucesso');
    
    }
}
