@extends('template.app')

@section('content')
<div class="col-md-12">
    <form method="post" action="{{action('ItemMisturaController@update', $id_mistura)}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card">
            <div class="card-header">
                <h3 class="title">Custo dos Ingredientes</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter">
                        <thead class=" text-primary">
                            <tr>
                                <th> Ingrediente </th>
                                <th> Custo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_ingredientes_mistura as $item_ingrediente)
                                <tr>
                                    <td>{{$item_ingrediente->nome}}</td>
                                    <td >
                                        <input type="hidden" name="id_ingrediente[]" value="{{$item_ingrediente->id}}">
                                    <input class="input-table form-control" placeholder="Ex: 1,23" type="text" name="custo[]" value="{{$item_ingrediente->custo}}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  
        <div class="card">
            <div class="card-header">
                <h3 class="title">Valor Ingrediente x Nutriente</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter">
                        <thead>
                            <tr>
                                <th> Ingrediente </th>
                                <th> Nutriente </th>
                                <th> Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_itens_mistura as $itens_mistura)
                            <tr>
                                <td> {{ $itens_mistura->ingredientes->nome }}</td> 
                                <td> {{ $itens_mistura->nutrientes->nome}}</td>
                                <td>
                                    <input type="hidden" name="id_item_mistura[]" value="{{ $itens_mistura->id}}">
                                    <input class="input-table form-control" placeholder="Ex: 1,23" name= "valor_ingredxnutr[]" type="text" value="{{ $itens_mistura->valor_ingredxnutr }}"/>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @if($list_restricoes_nutrientes_mistura->count() > 0)
        <div class="card">
            <div class="card-header">
                <h3 class="title">Restrição dos Ingredientes</h3>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead>
                                <tr>
                                    <th> Nutriente </th>
                                    <th> Restrição </th>
                                    <th> Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_restricoes_nutrientes_mistura as $itens_restricao_nutriente_mistura)
                                <tr>
                                    <td> {{ $itens_restricao_nutriente_mistura->nutriente_nome }}</td> 
                                    <td> {{ $itens_restricao_nutriente_mistura->restricao_nome}}</td>
                                    <td>
                                        <input type="hidden" name="valor_restricao[]" value="{{ $itens_restricao_nutriente_mistura->id}}">
                                        <input class="input-table form-control" placeholder="Ex: 1,23" name= "valor_restricao[]" type="text" value="{{ $itens_restricao_nutriente_mistura->valor_restricao }}"/>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
</div>
    <script>
        // $('.valor_item_mistura').each(function(){
        //     $(this).focusout(function(){
        //         // $("#valor_ingredxnutr_list").val();
        //         foreach()
        //         console.log($(this).val());
        //     });
        // });
    </script>
@endsection 