<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->middleware(['auth'])->name('user.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');
Route::get('/entreprise/dashboard', [EntrepriseController::class, 'dashboard'])->middleware(['auth'])->name('entreprise.dashboard');


Route::get('/user/cv',[UserController::class,'cv'])->middleware(['auth'])->name('user.cv');
Route::get('/user/offre',[UserController::class,'offre'])->middleware(['auth'])->name('user.offre');
Route::get('/entreprise/condidate',[EntrepriseController::class,'condidate'])->middleware(['auth'])->name('entreprise.condidate');
Route::get('/entreprise/offres',[EntrepriseController::class,'offres'])->middleware(['auth'])->name('entreprise.offres');
Route::get('/entreprise/profile',[EntrepriseController::class,'profile'])->middleware(['auth'])->name('entreprise.profile');
Route::get('/user/profile',[UserController::class,'profile'])->middleware(['auth'])->name('user.profile');
Route::get('/admin/offre',[AdminController::class,'offre'])->middleware(['auth'])->name('admin.offre');
Route::get('/admin/statistique',[AdminController::class,'statistique'])->middleware(['auth'])->name('admin.statistique');


Route::get('/user/formregister',[CandidateController::class,'store'])->middleware(['auth'])->name('condidate.store');
Route::get('/entreprise/formregister',[EntrepriseController::class,'register'])->middleware(['auth'])->name('entreprise.formregister');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
