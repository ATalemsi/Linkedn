<?php

namespace App\Http\Controllers;

use App\Models\CursusEducatif;
use App\Models\Cv;
use Illuminate\Http\Request;

class CursusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'diplome' => 'required|string',
            'etablissement' => 'required|string',
            'date_obtention' => 'required|string',
        ]);
        $cv = Cv::where('user_id', auth()->id())->firstOrFail();
        CursusEducatif::create([
            'cv_id' =>$cv->id,
            'diplome' => $request->diplome,
            'etablissement' => $request->etablissement,
            'date_obtention' => $request->date_obtention,
        ]);

        return redirect()->route('cv.form')->with('success', 'Cursus created successfully!');
    }

    public function getUserCurses()
    {
        $cvId = Cv::where('user_id', auth()->id())->pluck('id')->first();

        $cursus = CursusEducatif::where('cv_id', $cvId)->get();

        return response()->json($cursus);
    }
    public function destroy($id)
    {
        $cursus = CursusEducatif::findOrFail($id);

        $cursus->delete();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Cursus deleted successfully'], 200);

    }
}
