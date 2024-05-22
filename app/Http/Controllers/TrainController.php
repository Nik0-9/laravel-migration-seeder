<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $morning_trains = Train::where('departure_time', '<', '12:00:00')->get();
        return view("home", compact("trains","morning_trains"));
    }}
