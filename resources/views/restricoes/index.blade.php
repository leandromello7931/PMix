@extends('template.app')

@section('content')
<div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6 text-left">
                            <h4 class="card-title mt-2"> Restrições </h4>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-fill btn-primary float-right" href={{('/restricoes/create')}} >
                            <i class="tim-icons icon-simple-add" aria-hidden="true"></i>
                            Nova Restrição
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restricoes as $restricao)
                        <tr>
                            <td class="">{{ $restricao->id }}</td>
                            <td class="text-center">{{ $restricao->nome }}</td>
                            <td class="text-right">
                                <button class="btn-grid btn-warning">
                                    <a class="text-white" href="/restricoes/{{$restricao->id}}/edit">
                                            <i class=" tim-icons icon-pencil"></i>
                                    </a>
                                </button>
                                <div class="inline-block">
                                    <form method="POST" action="/restricoes/{{$restricao->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn-grid btn-danger" type="submit">
                                        <a class="text-white" href="">
                                            <i class=" tim-icons icon-trash-simple"></i>
                                        </a>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection