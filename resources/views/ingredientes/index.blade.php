@extends('template.app')

@section('content')
<div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6 text-left">
                            <h2 class="card-title mt-2"> Ingredientes </h2>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-fill btn-primary float-right" href={{('/ingredientes/create')}} >
                            <i class="tim-icons icon-simple-add" aria-hidden="true"></i>
                            Novo Ingrediente
                        </a>
                    </div>
                </div>
            </div>
            
          <div class="card-body">
            <div class="table-responsive">
                
                <table class="table tablesorter " id="">                        
                    <thead class=" text-primary">
                        <tr>
                            <th class="">ID</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Custo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingredientes as $ingrediente)
                        <tr>
                            <td class="">{{ $ingrediente->id }}</td>
                            <td class="text-center">{{ $ingrediente->nome }}</td>
                            <td class="text-center">{{  $ingrediente->custo }}</td>
                            <td class="text-right">
                                    <a class="text-white" href="/ingredientes/{{$ingrediente->id}}/edit">
                                            <i class=" tim-icons icon-pencil"></i>
                                    </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection