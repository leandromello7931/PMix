@extends('template.app')

@section('content')
    <div class="col-md-8 col-sm-7">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Dados da Mistura</h5>
            </div>
            <div class="card-body">
                <form action="{{ action('MisturaController@store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="col-md-12 pr-md-1">
                        <div class="form-group ">
                            <label class="" for="mistura-nome">Nome</label>
                            <input class="form-control" name="nomeMistura" value= "Mistura #{{ $ultimaMistura}} "  id="mistura-nome" type="text" aria-describedby="nameMisturaHelpBlock">
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                Dê um nome para a mistura, ou use o default
                            </small>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
    
                    <div class="col-md-12 pr-md-1">
                        <div class="form-group" >
                            <label for="ingrediente-nome">Ingredientes</label>
                            <div class="form-control tags" id="tags">
                                <input autocomplete="something-new" type="hidden"  name="result" value="">
                                <input class="labelinput " id="ingrediente-nome" type="text" >
                            </div>
                            
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                Pressione Enter a cada ingrediente informado.
                            </small>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12 pr-md-1">
                        <div class="form-group">
                            <input type="hidden" class="mdl-chipfield__input" name="nutrientes" value="">
                            <label for="nutriente-nome">Nutrientes</label>
                            <input class="mdl-textfield__input form-control" id="nutriente-nome" type="text" >
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                    Pressione Enter a cada ingrediente informado.
                                </small>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12 pr-md-1">
                        <div class="form-group">
                            <input type="hidden" class="mdl-chipfield__input" name="restricoes" value="">
                            <label for="restricoes_nome">Restrições</label>
                            <input class="mdl-textfield__input form-control" id="restricoes_nome" type="text" >
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                    Pressione Enter a cada ingrediente informado.
                                </small>
                        </div>
                    </div>

                <button type="submit" class="btn btn-primary">
                    Button
                </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-5">
        <div class="card  card-user">
            <div class="card-body ">
            </div>
        </div>
    </div>

@endsection