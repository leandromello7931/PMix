@extends('template.app')

@section('content')
    <form method="post" action="{{action('MisturaController@update', $mistura->id)}}">
        @csrf
        <h2>{{$mistura->nome}}</h2>
        <p>{{ $mistura->id }}</p>
        @foreach ($mistura->itensMistura as $item_ingrediente)
            
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection