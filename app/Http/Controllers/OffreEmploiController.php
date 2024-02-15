<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use Illuminate\Http\Request;

class OffreEmploiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'competences_requises' => ['required', 'string'],
            'type_contrat' => ['required', 'string','in:distance,hybride,temps_plein'],
            'emplacement' => ['required', 'string'],
        ]);
        OffreEmploi::create([
            'entreprise_id' => auth()->user()->entreprise->id,
            'titre' => $request->titre,
            'description' => $request->description,
            'competences_requises' => $request->competences_requises,
            'type_contrat' => $request->type_contrat,
            'emplacement' => $request->emplacement,

        ]);
        return redirect()->route('entreprise.dashboard');
    }
    public function softDeleteOffreEmploi($id)
    {
        $offremploi = OffreEmploi::find($id);
        if (!$offremploi) {
            return redirect()->back()->with('error', 'Company not found.');
        }
        $offremploi->delete();
        return redirect()->back()->with('success', 'Company archived successfully.');
    }


}
