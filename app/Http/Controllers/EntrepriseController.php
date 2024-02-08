<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EntrepriseController extends Controller
{
    public function dashboard() :View
    {
        return view('entreprise.dashboard');
    }
    public function register()
    {
        return view('entreprise.formregister');
    }
}
