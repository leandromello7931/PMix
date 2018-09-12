@extends('template.app')

@section('content')

    {{-- <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">ID</th>
                    <th class="mdl-data-table__cell--non-numeric">Tags</th>
                    <th class="mdl-data-table__cell--non-numeric">Mistura</th>
                    <th class="mdl-data-table__cell--non-numeric">Deadline</th>
                    <th class="mdl-data-table__cell--non-numeric">Progress</th>
                </tr>
                </thead>
                <tbody>
               
                    @foreach ($misturas as $mistura)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{$mistura->id}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$mistura->nome}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}

        {{-- <div class="mdl-grid mdl-cell mdl-cell--8-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top "> --}}
                <a href="/mistura/create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-blue">
                    <i class="material-icons">create</i>
                    Criar mistura
                </a>
                <!-- Table-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                    {{-- <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table"> --}}
                    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Project</th>
                            <th class="mdl-data-table__cell--non-numeric">Responsible</th>
                            <th class="mdl-data-table__cell--non-numeric">Client contact</th>
                            <th class="mdl-data-table__cell--non-numeric">Deadline</th>
                            <th class="mdl-data-table__cell--non-numeric">Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Darkboard</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--mint">Alex</span>
                                <span class="label label--mini background-color--primary">Dina</span>
                                <span class="label label--mini background-color--cerulean">Misha</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Luke@skywalker.com</td>
                            <td class="mdl-data-table__cell--non-numeric">Jun 15</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task1" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task1">
                                    44%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Big financial app</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--baby-blue">Vlada</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Boss@financial.com</td>
                            <td class="mdl-data-table__cell--non-numeric">Mar 1</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task2" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task2">
                                    14%
                                </div>
                            </td>
                        </tr>
                        <tr class="is-selected">
                            <td class="mdl-data-table__cell--non-numeric">New Year office decoration</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--primary">Dina</span>
                                <span class="label label--mini background-color--baby-blue">Vlada</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">info@creativeit.io</td>
                            <td class="mdl-data-table__cell--non-numeric">Dec 25</td>
                            <td class="mdl-data-table__cell--non-numeric task-done">
                                <i id="task3" class="material-icons">done</i>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Don't worry, be happy!!!</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--secondary">Everybody</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Contact@happyness.com</td>
                            <td class="mdl-data-table__cell--non-numeric">Yesterday</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task4" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task4">
                                    31%
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
@endsection