<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OffreEmploiController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use MailchimpMarketing\ApiClient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/user/newsletter',[NewsletterController::class,'subscribe'])->middleware(['auth'])->name('user.newsletter');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->middleware(['auth'])->name('user.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');
Route::get('/entreprise/dashboard', [EntrepriseController::class, 'dashboard'])->middleware(['auth'])->name('entreprise.dashboard');


Route::get('/user/cv',[UserController::class,'cv'])->middleware(['auth'])->name('cv.form');


//add cursus for cv

Route::post('/user/cv',[CursusController::class,'store'])->middleware(['auth'])->name('cursus.store');
Route::get('/user/cv/cursus', [CursusController::class, 'getUserCurses'])->name('getUserCurses');
Route::delete('/user/cursus/{id}', [CursusController::class, 'destroy'])->name('cursus.destroy');

//add competence for cv
Route::post('/competence',[CompetenceController::class,'store'])->middleware(['auth'])->name('competence.store');
Route::get('/user/cv/competence', [CompetenceController::class, 'getUserCompetence'])->name('getUserCompetence');
Route::delete('/user/competence/{id}', [CompetenceController::class, 'destroy'])->name('competence.destroy');


//add expreiences for cv
Route::post('/experience',[ExperienceController::class,'store'])->middleware(['auth'])->name('experience.store');
Route::get('/user/cv/experience', [ExperienceController::class, 'getUserExperience'])->name('getUserExperience');
Route::delete('/user/experience/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');




//add language for cv
Route::post('/language',[LanguageController::class,'store'])->middleware(['auth'])->name('language.store');
Route::get('/user/cv/language', [LanguageController::class, 'getUserLanguage'])->name('getUserLanguage');
Route::delete('/user/language/{id}', [LanguageController::class, 'destroy'])->name('language.destroy');

//PDF
Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');
Route::get('/user/cvpdf', [PDFController::class, 'index'])->name('cv.index');



Route::get('/user/offre',[UserController::class,'offre'])->middleware(['auth'])->name('user.offre');
Route::get('/user/profile',[UserController::class,'profile'])->middleware(['auth'])->name('user.profile');
Route::post('/offre/postuler', [CandidateController::class, 'postuler'])->name('offre.postuler');
Route::get('/user/entreprise', [CandidateController::class, 'entreprise'])->name('user.entreprise');

Route::get('/search', [EntrepriseController::class, 'search'])->name('search');
Route::get('/searchoffre', [EntrepriseController::class, 'searchoffre'])->name('searchoffre');


Route::get('/entreprise/condidate',[EntrepriseController::class,'condidature'])->middleware(['auth'])->name('entreprise.condidate');
Route::get('/entreprise/offres',[EntrepriseController::class,'offre'])->middleware(['auth'])->name('entreprise.offres');
Route::post('offre/new', [OffreEmploiController::class, 'store'])->middleware(['auth'])->name('offre.new');

Route::get('/entreprise/profile',[EntrepriseController::class,'profile'])->middleware(['auth'])->name('entreprise.profile');


Route::get('/admin/data',[AdminController::class,'data'])->middleware(['auth'])->name('admin.data');
Route::get('/admin/statistique',[AdminController::class,'statistique'])->middleware(['auth'])->name('admin.statistique');
Route::get('/admin/softdelete',[AdminController::class,'softedelete'])->middleware(['auth'])->name('admin.softdelete');



Route::get('/user/formregister',[CandidateController::class,'create'])->middleware(['auth'])->name('condidate.create');
Route::post('/user/formregister',[CandidateController::class,'store'])->middleware(['auth'])->name('condidate.store');

Route::get('/entreprise/formregister',[EntrepriseController::class,'create'])->middleware(['auth'])->name('entreprise.create');
Route::post('/entreprise/formregister',[EntrepriseController::class,'store'])->middleware(['auth'])->name('entreprise.store');

Route::resource('entreprises', EntrepriseController::class);
Route::resource('users', UserController::class);
Route::resource('offre_emplois', OffreEmploiController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('entreprise/{id}/soft-delete', [EntrepriseController::class, 'softDeleteEntreprise'])->name('entreprise.soft-delete');
Route::delete('candidate/{id}/soft-delete', [CandidateController::class, 'softDeleteCandidat'])->name('candidate.soft-delete');
Route::delete('offremploi/{id}/soft-delete', [OffreEmploiController::class, 'softDeleteOffreEmploi'])->name('offre.soft-delete');

require __DIR__.'/auth.php';
