<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class trainController extends Controller
{
    public function index(){
        $currentDate = Carbon::today();
        $todayTrains = Train::whereDate('data_parteza', $currentDate);
        return view('trainIndex', compact('todayTrains'));
    }
}
