<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function dashboard()
    {
        // Return the dashboard view for the professor
        return view('prof.dashboard');
    }
}
