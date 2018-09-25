@extends('template.app')

@section('content')
    <form method="post" action="{{action('ItemMisturaController@update', $id_mistura)}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                {{-- <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table"> --}}
            <h4>Custo dos Ingredientes</h4>
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                <thead>
                    <tr>
                        <th> Ingrediente </th>
                        <th> Custo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_ingredientes_mistura as $item_ingrediente)
                        <tr>
                            <td>{{$item_ingrediente->nome}}</td>
                            <td><input type="text" name="id_ingrediente[]" value="{{$item_ingrediente->id}}"><input type="text" name="custo[]">{{$item_ingrediente->custo}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h4>Valor do Ingrediente x Nutriente</h4>
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
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
                        <td class="mdl-data-table__cell--non-numeric"> {{ $itens_mistura->ingredientes->nome }}</td> 
                        <td class="mdl-data-table__cell--non-numeric"> {{ $itens_mistura->nutrientes->nome}}</td>
                        
                    <td class="mdl-data-table__cell--non-numeric "><input type="text" name="id_item_mistura[]" value="{{ $itens_mistura->id}}"><input class="valor_item_mistura" name= "valor_ingredxnutr[]" type="text" value="{{ $itens_mistura->valor_ingredxnutr }}"/></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h4>Restrições dos Nutrientes</h4>
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th> Nutriente </th>
                            <th> Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_restricoes_nutrientes_mistura as $itens_restricao_nutriente_mistura)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"> {{ $itens_restricao_nutriente_mistura->nome }}</td> 
                            <td class="mdl-data-table__cell--non-numeric"> {{ $itens_restricao_nutriente_mistura->valor_restricao}}</td>
                            
                        <td class="mdl-data-table__cell--non-numeric "><input type="text" name="valor_restricao[]" value="{{ $itens_restricao_nutriente_mistura->id}}"><input  name= "valor_restricao[]" type="text" value="{{ $itens_restricao_nutriente_mistura->valor_restricao }}"/></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

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