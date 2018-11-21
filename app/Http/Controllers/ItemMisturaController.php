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
                                            ->join('restricoes', 'restricoes.id', '=', 'misturas_restricoes.id_restricao')
                                            ->where('misturas_restricoes.id_mistura', '=', $id)
                                            ->select('nutrientes.nome as nutriente_nome', 'restricoes.nome as restricao_nome', 'misturas_restricoes.id', 'misturas_restricoes.valor_restricao')
                                            ->distinct()
                                            ->get();
        //  dd($list_restricoes_nutrientes_mistura);
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
        //dd($request->custo);
        // $list = [
        //     "FO(Z)" => $request->custo,
        //     ""
        // ];
        $curl_post_data = [
            "RestrictionCount"=> "3",
            "VariableCount"=> "2",
            "FO(Z)" => "65, 30",
            "R0" => "2,3",
            "R0r" => "7", 
            "R1" => "3,2",
            "R1r" => "9",
            "R2" => "1,0",
            "R2r" =>"1"
        ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8080/Simplex_WS/webresources/simplex",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($curl_post_data),
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "accept: */*",
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $resultado = json_decode($response);
            sleep(4);
            return view('mistura.resultado.resultado_mistura');
        }
    }

    // {
    //     "RestrictionCount": "3",
    //     "VariableCount": "2",
    //     "FO(Z)": "65, 30",
    //     "R0": "2,3",
    //     "R0r" : "7", 
    //     "R1": "3,2",
    //     "R1r": "9",
    //     "R2": "1,0",
    //     "R2r":"1"
    // }

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
