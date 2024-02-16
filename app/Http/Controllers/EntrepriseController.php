<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Entreprise;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntrepriseController extends Controller
{
    public function dashboard() :View
    {
        return view('entreprise.dashboard');
    }
    public function create()
    {
        return view('entreprise.formregister');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'logo' => 'required',
            'slogan' => 'nullable|string|max:255',
            'industrie' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        if (request()->hasFile('logo')) {
            $image = request()->file('logo');
            $logoPath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $logoPath);
        } else {
            $logoPath = 'service.png';
        }
        Entreprise::create([
            'user_id' => auth()->id(),
            'nom' => $request->nom,
            'logo' => $logoPath,
            'slogan' => $request->slogan,
            'industrie' => $request->industrie,
            'description' => $request->description,
        ]);
        return redirect()->route('entreprise.dashboard');

    }
    public function offre()
    {
        return view('entreprise.offres');

    }
    public function profile()
    {
        $entreprise = auth()->user();
        $entreprise->load('entreprise');

        return view('entreprise.profile',compact('entreprise'));
    }
    public function condidature()
    {


        $entreprise = auth()->user()->entreprise;


        $offreIds = $entreprise->offresEmploi->pluck('id');


        $candidatures = Candidature::whereHas('offresEmploi', function ($query) use ($offreIds) {
            $query->whereIn('offre_emploi_id', $offreIds);
        })->with('user', 'offresEmploi')->get();
        return view('entreprise.condidate', compact('candidatures'));
    }

    public function softDeleteEntreprise($id)
    {
        $entreprise = Entreprise::find($id);
        if (!$entreprise) {
            return redirect()->back()->with('error', 'Company not found.');
        }
        $entreprise->delete();
        return redirect()->back()->with('success', 'Company archived successfully.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $entreprises = Entreprise::where('nom', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('industrie', 'like', "%$query%")
            ->get();

        return view('user.entreprise', compact('entreprises'));
    }
    public function searchoffre(Request $request)
    {
        $query = $request->input('query');
        $offres = OffreEmploi::where('titre', 'like', "%$query%")
            ->orWhere('type_contrat', 'like', "%$query%")
            ->orWhere('competences_requises', 'like', "%$query%")
            ->get();

        return view('user.offre', compact('offres'));
    }




}
