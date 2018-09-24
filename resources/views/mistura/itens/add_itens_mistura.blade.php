@extends('template.app')

@section('content')
    <form method="post" action="{{action('ItemMisturaController@update', $id_mistura)}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                {{-- <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table"> --}}
            <input type="hidden" id="valor_ingredxnutr_list" name="valor_ingredxnutr_list"/>
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
                        <td class="mdl-data-table__cell--non-numeric "><input class="valor_item_mistura" name= "valor_ingredxnutr[]" type="text" value="{{ $itens_mistura->valor_ingredxnutr }}"/></td>
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