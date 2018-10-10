@extends('template.app')

@section('content')
    <div class="col-md-8 col-sm-7 d-flex justify-content-center">
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
                            <div class="form-control tags" id="tags_ingredientes">
                                <input class="labelinput " id="ingrediente-nome" type="text" >
                                <input  type="hidden"  name="ingredientes" value="">
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
                            <label for="nutriente-nome">Nutrientes</label>
                            <div class="form-control tags" id="tags_nutrientes">
                                <input class="labelinput " id="nutriente-nome" type="text" >
                                <input type="hidden" name="nutrientes" value="">
                            </div>
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                Pressione Enter a cada nutriente informado.
                            </small>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12 pr-md-1">
                        <div class="form-group">
                            <label for="restricoes_nome">Restrições</label>
                            <div class="form-control tags" id="tags_restricoes">
                                <input class="labelinput " id="restricoes_nome" type="text" >
                                <input type="hidden" name="restricoes" value="">
                            </div>
                            <small id="nameMisturaHelpBlock" class="form-text text-muted">
                                Pressione Enter a cada restrição informada.
                            </small>
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