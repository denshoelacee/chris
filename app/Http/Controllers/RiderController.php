<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiderController extends Controller
{
    //
    public function dashboard()
    {
        return view('rider.dashboard');
    }
}
