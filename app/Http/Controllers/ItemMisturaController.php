<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemMistura;

use App\Ingrediente;

use App\Mistura;

use DB;

use Illuminate\Support\Str;

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
        $this->validate($request,[
            'custo' => 'required',
            'valor_ingredxnutr' => 'required',
            'valor_restricao' => 'required'
        ]);


        for ($i=0; $i<count($request->id_ingrediente); $i++){
            $data = ['custo'=> $request->custo[$i]];
            
            DB::table('ingredientes')->where('id', $request->id_ingrediente[$i])
            ->update($data);
        }

        for($i=0; $i<count($request->id_item_mistura); $i++){
            $data = ['valor_ingredxnutr' => $request->valor_ingredxnutr[$i]];
            
            DB::table('itens_mistura')->where('id', $request->id_item_mistura[$i])
            ->update($data);
        }

        for($i=0; $i<count($request->id_restricao); $i++){
            $data = ['valor_restricao' => $request->valor_restricao[$i]];
            
            DB::table('misturas_restricoes')->where('id', $request->id_restricao[$i])
            ->update($data);
        }

        //seleciona os nutrientes
        $id_nutriente_db = DB::table('itens_mistura')
        ->where('id_mistura', '=', $id)
        ->select('id_nutriente')
        ->distinct()
        ->get();

        //quantidade de nutrientes é a quantidade de restricoes
        $restrictionCount = count($id_nutriente_db);
        
        $data = array();

        $data += ["RestrictionCount" => strval($restrictionCount)];
        $data += ["VariableCount" => strval(count($request->id_ingrediente))];
        $data += ["FO(Z)" => $request->custo];
        $j = 0;

        //percorre itens_mistura para pegar o valor de ingredxnutr de cada nutriente
        foreach($id_nutriente_db as $item_nutriente_db){
            $restriction_db = DB::table('itens_mistura')
            ->where([
                ['id_mistura', '=', $id],
                ['id_nutriente', '=', $item_nutriente_db->id_nutriente]
            ])
            ->get();
            
            for($i=0; $i<$restrictionCount; $i++){
                $r[] = strval($restriction_db->values()->get($i)->valor_ingredxnutr);
            }
            $data += ["R$j" => $r];
            unset($r);
            

            $valor_restricao_db = DB::table('misturas_restricoes')
            ->where([
                ['id_mistura', '=', $id],
                ['id_nutriente', '=', $item_nutriente_db->id_nutriente]
            ])
            ->get();

            $data += ["Rr$j" => strval($valor_restricao_db->values()->get(0)->valor_restricao)];
            $j++;
            // SELECT valor_ingredxnutr FROM `itens_mistura` WHERE id_mistura = 10 and id_nutriente = 4
        }


        $data_json = json_encode($data);
        //dd($data_json);
      
        // var_dump($data_json);
        $url = "http://localhost:8084/testrestfullapi/webresources/test/getdata";

        $result_json = $this->CallAPI("POST", $url, $data_json);

        $result = json_decode($result_json);
        if (!$result == null){

            $list_ingredientes_mistura = DB::table('ingredientes')
            ->join('itens_mistura', 'ingredientes.id', '=', 'itens_mistura.id_ingrediente')
            ->where('itens_mistura.id_mistura', '=', $id)
            ->select('ingredientes.*')
            ->distinct()
            ->get();
            
            for($i=0; $i < count($list_ingredientes_mistura); $i++){
                print_r($i);
                $resultado[] = ["nome" => $list_ingredientes_mistura->values()->get($i)->nome,
                        "valor" => $result[$i]
            ];
        
            }
     
     
            return view('mistura.itens.resultado', [
                'resultado' => $resultado, 
                ]);
        }

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

    function CallAPI($method, $url, $data){
        $curl = curl_init();
        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
                );
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // Optional Authentication:
        // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }

}
