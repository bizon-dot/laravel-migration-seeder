<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trips;

class TripsController extends Controller
{
    public function index() {
        $data = Trips::all();
        $trips = [
            'trips' => $data,
        ];
        return view('welcome', $trips);
    }
}
