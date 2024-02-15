<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function index(){


        $cv = Cv::where('user_id', Auth::id())->firstOrFail();
        $user = User::with('candidate')->find(Auth::id());

        $cursuses = $cv->cursusEducatifs;
        $languages = $cv->languesMaitrisees;
        $experiences = $cv->experiencesProfessionnelles;
        $competences = $cv->competences;

        // Pass the data to a view for displaying
        return view('user.cvpdf', compact('user',  'cursuses', 'languages', 'experiences', 'competences'));


    }
    public function generatePDF()
    {


        $cv = Cv::where('user_id', Auth::id())->firstOrFail();
        $user = User::with('candidate')->find(Auth::id());
        $cursuses = $cv->cursusEducatifs;
        $languages = $cv->languesMaitrisees;
        $experiences = $cv->experiencesProfessionnelles;
        $competences = $cv->competences;

        // Pass data to the PDF view
        $data = compact('user', 'cursuses', 'languages', 'experiences', 'competences');

        // Generate the PDF
        $pdf = PDF::loadView('user.cvpdf', $data);

        // Download the PDF
        return $pdf->download('cv.pdf');
    }
}
