<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class TripController extends Controller
{
    function index($id)
    {
        $trip = Trip::findOrFail($id);
        return view("trips.trip", compact("trip"));
    }
}
