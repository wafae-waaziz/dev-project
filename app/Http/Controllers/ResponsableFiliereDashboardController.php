<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsableFiliereDashboardController extends Controller
{
    public function dashboard()
    {
        return view('respofilière.dashboard');
    }
}

