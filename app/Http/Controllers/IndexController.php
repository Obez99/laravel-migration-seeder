<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class IndexController extends Controller
{
    function index()
    {
        $trips = Trip::all();
        return view("index", ["trips" => $trips]);
    }
}
