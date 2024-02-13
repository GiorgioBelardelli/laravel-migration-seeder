@extends('layouts.main-layout')
@section('head')
    <title>DAJE TRENI</title>
@endsection
@section('content')
    <h1>DAJE TRENI: {{ count($trains) }}</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Treno numero</th>
                    <th>Compagnia</th>
                    <th>Stazione di partenza</th>
                    <th>Orario di partenza</th>
                    <th>Stazione d'arrivo</th>
                    <th>In orario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train -> train_id }}</td>
                    <td>{{ $train -> company }}</td>
                    <td>{{ $train -> department_station }}</td>
                    <td>{{ $train -> department_time }}</td>
                    <td>{{ $train -> arrival_station }}</td>
                    <td>{{ $train -> on_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        @endsection
