<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\LangueMaitrisee;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function store(Request $request)
    {
         $request->validate([
            'langue' => 'required|string|max:255',
            'niveau' => 'required|string|',
        ]);

        $cv = Cv::where('user_id', auth()->id())->firstOrFail();
        LangueMaitrisee::create([
            'cv_id' =>$cv->id,
            'langue' => $request->langue,
            'niveau'=>$request->niveau,
        ]);
        return redirect()->route('cv.form')->with('success', 'Langues created successfully!');

    }
    public function getUserLanguage()
    {
        $cvId = Cv::where('user_id', auth()->id())->pluck('id')->first();

        $langues = LangueMaitrisee::where('cv_id', $cvId)->get();


        return response()->json($langues);

    }
    public function destroy($id)
    {
        $langue = LangueMaitrisee::findOrFail($id);
        $langue->delete();

        return response()->json(['message' => 'Langues deleted successfully']);
    }
}
