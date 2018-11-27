<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nutriente;

class NutrienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_nutrientes = Nutriente::paginate(25);
        return view('nutrientes.index', [
            'nutrientes' => $list_nutrientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutrientes.add_nutriente');
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
        Nutriente::create($data);

        return redirect()->action('NutrienteController@index')->with('success', 'Nutriente adicionado com sucesso');
    
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
        $nutriente = Nutriente::find($id);
        return view('nutrientes.edit_nutriente')->with('nutriente', $nutriente);
   
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
        $nutriente = Nutriente::find($id);
        $nutriente->nome = $request->input('nome');
        $nutriente->save();

        return redirect()->action('NutrienteController@index')->with('success', 'Nutriente atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nutriente = Nutriente::find($id);
        $nutriente->delete();
        return redirect()->action('NutrienteController@index')->with('success', 'Nutriente excluído com sucesso');
    
    }
}
