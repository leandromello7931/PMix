<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingrediente;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_ingredientes = Ingrediente::paginate(15);
        return view('ingredientes.index', [
            'ingredientes' => $list_ingredientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredientes.add_ingrediente');
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
            'nome' => 'required',
            'custo' => 'required'
        ]);

        $data = [
            'nome' => $request->nome,
            'custo' => $request->custo
        ];
        Ingrediente::create($data);

        return redirect()->action('IngredienteController@index')->with('success', 'Ingrediente adicionado com sucesso');
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
        $ingrediente = Ingrediente::find($id);
        return view('ingredientes.edit_ingrediente')->with('ingrediente', $ingrediente);
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
            'nome' => 'required',
            'custo' => 'required'
        ]);

        //update ingrediente
        $ingrediente = Ingrediente::find($id);
        $ingrediente->nome = $request->input('nome');
        $ingrediente->custo = $request->input('custo');
        $ingrediente->save();

        return redirect()->action('IngredienteController@index')->with('success', 'Ingrediente atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingrediente = Ingrediente::find($id);
        $ingrediente->delete();
        return redirect()->action('IngredienteController@index')->with('success', 'Ingrediente excluído com sucesso');
    }
}
