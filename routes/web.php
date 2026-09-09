<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseursController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

route::get('/accueil/index',[AccueilController::class,'index'])->name('accueil.index');
route::get('/index',[EtudiantController::class,'index'])->name('etudiant.index');
route::get('/admin/dashdoard',[AdminController::class,'dashboard'])->name('admin.dashbord');
route::get('/admin/cours',[AdminController::class,'cours'])->name('admin.cours');
route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');
route::get('/admin/parametres',[AdminController::class,'parametres'])->name('admin.parametres');
route::get('/admin/statistiques',[AdminController::class,'statistiques'])->name('admin.statistiques');
route::get('/admin/etudiants',[Admincontroller::class,'etudiants'])->name('admin.etudiants');
Route::get('/admin/professeurs', [AdminController::class, 'professeurs'])->name('admin.professeurs');
route::get('admin/examens',[AdminController::class,'examens'])->name('admin.examens');
route::get('/prof/dashboard',[ProfesseursController::class,'dashboard'])->name('prof.dashboard');
route::get('/prof/cours',[ProfesseursController::class,'cours'])->name('prof.cours');
route::get('/prof/parametres',[ProfesseursController::class,'parametres'])->name('prof.parametres');
route::get('/prof/statistiques',[ProfesseursController::class,'statistiques'])->name('prof.statistiques');
route::get('/prof/examens',[ProfesseursController::class,'examens'])->name('prof.examens');
route::get('/prof/etudiants',[ProfesseursController::class,'etudiants'])->name('prof.etudiants');
route::get('/etudiant/dashboard',[EtudiantController::class,'dashboard'])->name('etudiant.dashboard');
route::get('/etudiant/profil',[EtudiantController::class,'profil'])->name('etudiant.profil');
route::get('/etudiant/profil_apprentissage',[EtudiantController::class,'profil_apprentissage'])->name('etudiant.profil_apprentissage');
route::get('/etudiant/cours',[EtudiantController::class,'cours'])->name('etudiant.cours');
route::get('/etudiant/examens',[EtudiantController::class,'examens'])->name('etudiant.examens');
route::get('/etudiant/statistiques',[EtudiantController::class,'statistiques'])->name('etudaint.statistiques');
route::get('/etudiant/parametres',[EtudiantController::class,'parametres'])->name('etudiant.parametres');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
