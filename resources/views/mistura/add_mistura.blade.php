@extends('template.app')

@section('content')
<main class="mdl-layout__content ">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Dados da Mistura</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="mdl-card__supporting-text">
            <form action="#" class="form">
                <div class="form__article"> 
                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                        <label class="mdl-textfield__label" for="firstName">Digite um nome para a Mistura</label>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                            <label class="mdl-textfield__label" for="firstName">Ingredientes</label>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="secondName" value=""/>
                            <label class="mdl-textfield__label" for="secondName">Nutrientes</label>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="secondName" value=""/>
                            <label class="mdl-textfield__label" for="secondName">Nutrientes</label>
                        </div>
                    </div>

                    
                </div>


                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection