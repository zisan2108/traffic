<?php

namespace App\Http\Controllers\Traffic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrafficController extends Controller
{
    public function Traffic()
    {
        return view('Traffic.traffic');
    }

    public function AddCase()
    {
        return view('Traffic.add_case');
    }

    public function SearchCase()
    {
        return view('Traffic.search_case');
    }
   

}
