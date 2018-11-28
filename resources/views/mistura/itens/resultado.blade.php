@extends('template.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h3 class="title">Resultado da Mistura</h3>
        </div>
        <div class="card-body">

            @if(count($resultado) > 0)
                @foreach($resultado as $item)
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><h3>{{$item['nome']}}</h3></div>
                        <div class="card-body">
                            <h5 class="card-title">Quantidade</h5>
                            <p class="card-text"><h4>{{$item['valor']}} g/kg</h4></p>
                        </div>
                    </div>
                @endforeach
            @endif
            <!-- <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header"><h3>Soja</h3></div>
                <div class="card-body">
                    <h5 class="card-title">Quantidade</h5>
                    <p class="card-text"><h4>0 g/kg</h4></p>
                </div>
            </div>

            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header"><h3>Peixe</h3></div>
                <div class="card-body">
                    <h5 class="card-title">Quantidade</h5>
                    <p class="card-text"><h4>0,5 g/kg</h4></p>
                </div>
            </div> -->

        </div>
    </div>
    </div>
@endsection