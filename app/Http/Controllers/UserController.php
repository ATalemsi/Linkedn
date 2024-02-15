<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function dashboard() : View
    {
        return view('user.dashboard');
    }
   public  function  cv()
   {
       return view('user.cv');
   }

   public function profile()
{
    $user = auth()->user();
    $user->load('candidate');

   return view('user.profile',compact('user'));
}
public  function offre()
{

      $offres = OffreEmploi::get();;
      $offres->load('entreprise');

    return view('user.offre',compact('offres'));
}
}
