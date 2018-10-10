@extends('template.app')

@section('content')
    <div class="col-md-8 col-sm-12 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Dados da Restrição</h5>
            </div>
            <div class="card-body">
                <form action="{{ action('RestricaoController@store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="col-md-12 pr-md-1">
                        <div class="form-group ">
                            <label class="" for="nome">Nome</label>
                            <input class="form-control" name="nome" id="nome" type="text">
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