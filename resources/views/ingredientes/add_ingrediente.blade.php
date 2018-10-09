@extends('template.app')

@section('content')
    <div class="col-md-8 col-sm-7 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Dados do Ingrediente</h5>
            </div>
            <div class="card-body">
                <form action="{{ action('IngredienteController@store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="col-md-12 pr-md-1">
                        <div class="form-group ">
                            <label class="" for="nome">Nome</label>
                            <input class="form-control" name="nome" id="nome" type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="col-md-12 pr-md-1">
                        <div class="form-group ">
                            <label class="" for="custo">Custo</label>
                            <input class="form-control" name="custo" id="custo" type="text" placeholder="Ex: 1,23">
                        </div>
                    </div>

                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
                </form>
            </div>
        </div>
    </div>

@endsection