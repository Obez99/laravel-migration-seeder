<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class TripController extends Controller
{
    function index($id)
    {
        $trips = Trip::findOrFail($id);
        return view("trips.trip", compact("trips"));
    }
}
