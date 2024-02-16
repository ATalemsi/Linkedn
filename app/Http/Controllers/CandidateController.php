<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Cv;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function create()
    {
         return view('user.formregister');
    }
    public function store(Request $request)
    {
        $request->validate([
            'photo_profil' => 'required',
            'titre' => 'required|string|max:255',
            'poste_actuel' => 'required|string|max:255',
            'industrie' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'informations_contact' => 'required|string|max:255',
            'a_propos' => 'required|string',
        ]);

        if (request()->hasFile('photo_profil')) {
            $image = request()->file('photo_profil');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'service.png';
        }

        Candidature::create([
            'user_id' => auth()->id(),
            'photo_profil' => $imageName,
            'titre' => $request->titre,
            'poste_actuel' => $request->poste_actuel,
            'industrie' => $request->industrie,
            'adresse' => $request->adresse,
            'informations_contact' => $request->informations_contact,
            'a_propos' => $request->a_propos,
        ]);

        Cv::create([
            'user_id' => auth()->id()
        ]);

        // Redirect with success message
        return redirect()->route('user.dashboard')->with('success', 'Candidature created successfully!');

    }
    public function postuler(Request $request)
    {
        $offreId = $request->offre_id;
        $userId = auth()->id();
        $candidature = Candidature::where('user_id', $userId)->firstOrFail();
        $candidature->offresEmploi()->attach($offreId);
        return redirect()->route('user.offre')->with('success', 'Candidature created successfully!');
    }
    public function softDeleteCandidat($id)
    {
        $candidate = Candidature::find($id);
        if (!$candidate) {
            return redirect()->back()->with('error', 'Company not found.');
        }
        $candidate->delete();
        return redirect()->back()->with('success', 'Company archived successfully.');
    }
    public function entreprise()
    {
        $entreprises = Entreprise::all();

        return view('user.entreprise',compact('entreprises'));
    }


}
