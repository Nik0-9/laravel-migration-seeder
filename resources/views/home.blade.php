@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1 class="text-center">Central Station</h1>

    <h2>Lista treni in partenza prima delle ore 12:00</h2>
    <ul>
        @foreach ($morning_trains as $train)
        <li>
            Treno {{$train->agency }} Partenza da : {{$train->departure_station }} Arrivo a : {{$train->departure_arrival }} Partenza ore : {{$train->departure_time }} Arrivo ore : {{$train->arrival_time }} &nbsp; Codice treno: {{$train->train_code }}  
        </li>
        
        @endforeach
    </ul>
</main>

@endsection
