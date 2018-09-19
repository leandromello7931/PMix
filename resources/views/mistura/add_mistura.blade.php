@extends('template.app')

@section('content')
<form action="{{ action('MisturaController@store')}}" method="POST">
        {{csrf_field()}}
                <h5 class="mdc-typography-base	mdc-typography--headline5	">Ingredientes</h5>
                <div class="crane-field parent-node ">
                    <div class="w100 crane-text-field mdc-text-field mdl-chipfield mdc-text-field--box" id="ingredientes">
                        <input type="hidden" class="mdl-chipfield__input" name="ingredientes" value="">
                        <input class="mdl-textfield__input crane-text-field__input mdc-text-field__input" id="crane-name-input"
                                 type="text" >
                        <label class="crane-floating-label mdc-floating-label" for="crane-name-input">
                            Name
                        </label>
                        <div class="mdc-line-ripple">sada</div>
                    </div>
                </div>

                <h5 class="mdc-typography-base	mdc-typography--headline5	">Nutrientes</h5>
                <div class="crane-field parent-node ">
                    <div class="w100 crane-text-field mdc-text-field mdl-chipfield mdc-text-field--box" id="nutrientes">
                        <input type="hidden" class="mdl-chipfield__input" name="nutrientes" value="">
                        <input class="mdl-textfield__input crane-text-field__input mdc-text-field__input" id="crane-name-input"
                                 type="text" >
                        <label class="crane-floating-label mdc-floating-label" for="crane-name-input">
                            Name
                        </label>
                        <div class="mdc-line-ripple">sada</div>
                    </div>
                </div>
                
                <h5 class="mdc-typography-base	mdc-typography--headline5	">Restrições</h5>
                <div class="crane-field parent-node ">
                        <div class="w100 crane-text-field mdc-text-field mdl-chipfield mdc-text-field--box" id="restricoes">
                            <input type="hidden" class="mdl-chipfield__input" name="restricoes" value="">
                            <input class="mdl-textfield__input crane-text-field__input mdc-text-field__input" id="crane-name-input"
                                     type="text" >
                            <label class="crane-floating-label mdc-floating-label" for="crane-name-input">
                                Name
                            </label>
                            <div class="mdc-line-ripple">sada</div>
                        </div>
                    </div>
            <button type="submit" class="foo-button mdc-button">
                Button
            </button>
          </div>
    </div>
  </form>
@endsection