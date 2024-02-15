<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Cv;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public  function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'niveau' =>'required|string|max:255'
        ]);
        $cv=Cv::where('user_id',auth()->id())->firstOrFail();
        Competence::create([
            'cv_id' =>$cv->id,
            'nom' => $request->nom,
            'niveau' => $request->niveau,
        ]);

        return redirect()->route('cv.form')->with('success', 'Competence created successfully!');
    }
    public  function getUserCompetence()
    {
        $cvId = Cv::where('user_id', auth()->id())->pluck('id')->first();

        $competences = Competence::where('cv_id', $cvId)->get();
        return response()->json($competences);
    }
    public function destroy($id)
    {
        $competence = Competence::findOrFail($id);
        $competence->delete();

        return response()->json(['message' => 'Competence deleted successfully']);

    }
}
