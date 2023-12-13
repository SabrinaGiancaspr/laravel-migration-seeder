<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller 
{
    public function index(){
        $currentDate = Carbon::today();
        $todayTrains = Train::whereDate('data_partenza', $currentDate)->get();
        return view('trainIndex', compact('todayTrains'));
    }
}