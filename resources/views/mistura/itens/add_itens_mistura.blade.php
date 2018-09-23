@extends('template.app')

@section('content')
    <form method="post" action="{{action('ItemMisturaController@update', $id_mistura)}}">
        @csrf
        @foreach ($list_itens_mistura as $itens_mistura)
            <h2>{{$itens_mistura->nutrientes->nome}}</h2>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection