@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1 class="text-center">Barletta Centrale</h1>

    <h2>Lista treni in partenza oggi</h2>
    <ul>
        @foreach ($morning_trains as $train)
            <li>
                <p>
                    Treno {{$train->agency }} Partenza da : {{$train->departure_station }} Arrivo a :
                    {{$train->departure_arrival }} Partenza ore : {{$train->departure_time }} Arrivo ore :
                    {{$train->arrival_time }} &nbsp; Codice treno: {{$train->train_code }}
                </p>
            </li>
        @endforeach
    </ul>
    <h2>Lista treni in partenza domani</h2>
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>
                    Treno {{$train->agency }} Partenza da : {{$train->departure_station }} Arrivo a :
                    {{$train->departure_arrival }} Partenza ore : {{$train->departure_time }} Arrivo ore :
                    {{$train->arrival_time }} &nbsp; Codice treno: {{$train->train_code }}
                </p>
            </li>
        @endforeach
    </ul>
</main>

@endsection