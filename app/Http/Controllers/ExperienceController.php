<?php

namespace App\Http\Controllers;


use App\Models\Cv;


use App\Models\ExperienceProfessionnelle;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'poste' => 'required|string',
            'entreprise' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date',
        ]);
        $cv = Cv::where('user_id', auth()->id())->firstOrFail();

        ExperienceProfessionnelle::create([
            'cv_id' =>$cv->id,
            'poste' => $request->poste,
            'entreprise'=>$request->entreprise,
            'date_debut'=>$request->date_debut,
            'date_fin'=>$request->date_fin
        ]);

        return redirect()->route('cv.form')->with('success', 'Competence created successfully!');

    }
    public function getUserExperience()
    {
        $cvId = Cv::where('user_id', auth()->id())->pluck('id')->first();

        $experiences = ExperienceProfessionnelle::where('cv_id', $cvId)->get();


        return response()->json($experiences);
    }
    public function destroy($id)
    {
        $experience = ExperienceProfessionnelle::findOrFail($id);
        $experience->delete();
        return response()->json(['message' => 'Experience deleted successfully']);

    }
}
