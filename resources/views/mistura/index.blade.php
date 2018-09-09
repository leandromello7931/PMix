@extends('template.app')

@section('content')
    <div>
        @foreach ($misturas as $mistura)
            <p>{{$mistura->nome}}</p>
        @endforeach
    </div>
@endsection