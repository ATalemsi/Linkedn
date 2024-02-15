<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Entreprise;
use App\Models\OffreEmploi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard() :View
    {
          return view('admin.dashboard');
    }

    public function data()
    {
        $candidates = Candidature::with('user')->get();
        $offres = OffreEmploi::all();
        $entreprises = Entreprise::with('user')->get();

        return view('admin.data', compact('candidates', 'offres', 'entreprises'));
    }
    public function softdelete()
    {

    }
    public function statistiques()
    {

    }
}
