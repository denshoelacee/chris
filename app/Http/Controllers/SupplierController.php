<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SupplierController extends Controller
{
    //
    public function dashboard()
    {
        return view('supplier.dashboard');
    }
}
