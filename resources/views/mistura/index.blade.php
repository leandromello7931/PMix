@extends('template.app')

@section('content')

        {{-- <div class="mdl-grid mdl-cell mdl-cell--8-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top "> --}}
                <a href={{('/mistura/create')}} class="mdc-button mdc-button--raised">
                    <i class="material-icons mdc-button__icon" aria-hidden="true">add</i>
                    Nova Mistura
                </a>
                <!-- Table-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                    {{-- <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table"> --}}
                    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">ID</th>
                            <th class="mdl-data-table__cell--non-numeric">Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($misturas as $mistura)
                            <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $mistura->id }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $mistura->nome }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
@endsection