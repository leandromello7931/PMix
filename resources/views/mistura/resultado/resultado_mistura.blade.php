@extends('template.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="title">Resultado da Mistura</h3>
    </div>
    <div class="card-body">
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header"><h3>Osso</h3></div>
            <div class="card-body">
                <h5 class="card-title">Quantidade</h5>
                <p class="card-text"><h4>0,5 g/kg</h4></p>
            </div>
        </div>

        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
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
        </div>

    </div>
</div>
@endsection