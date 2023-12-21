<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trains = Train::whereDate('departure_time', '=', Carbon::today()->toDateString())->get();
        return view("trains.index", compact("trains"));
    }
}
