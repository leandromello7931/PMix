@extends('template.app')

@section('content')
    <div class="col-md-8 col-sm-7 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Dados do Nutriente</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('NutrienteController@update', $nutriente->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="col-md-12 pr-md-1">
                        <div class="form-group ">
                            <label class="" for="nome">Nome</label>
                            <input class="form-control" name="nome" value="{{$nutriente->nome}}" id="nome" type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
                </form>
            </div>
        </div>
    </div>

@endsection