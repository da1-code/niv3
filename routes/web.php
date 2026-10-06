<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseursController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AssistantIAController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MistralController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| ACCUEIL
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('accueil.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


route::get('/accueil/index',[AccueilController::class,'index'])->name('accueil.index');
route::get('/index',[EtudiantController::class,'index'])->name('etudiant.index');
route::get('/etudiant/ia',[EtudiantController::class,'chatbot'])->name('etudiant.chatbot');
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
 Route::post('/etudiant/ia/ask', [AssistantIAController::class, 'ask'])
        ->name('etudiant.ia.ask');
 Route::get('/etudiant/ia/cours', [AssistantIAController::class, 'cours']);
    Route::post('/etudiant/ia/cours/{cours}/expliquer', [AssistantIAController::class, 'expliquer']);
    Route::post('/etudiant/ia/cours/{cours}/recommander', [AssistantIAController::class, 'recommander']);
    Route::post('/etudiant/ia/cours/{cours}/exercices', [AssistantIAController::class, 'exercices']);

});

require __DIR__.'/auth.php';

route::get('/accueil/index',[AccueilController::class,'index'])->name('accueil.index');



/*
|--------------------------------------------------------------------------
| CONNEXION ET INSCRIPTION
|--------------------------------------------------------------------------
*/

route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');

route::post('/register',[RegisterController::class,'register'])->name('register.post');

route::get('/login',[LoginController::class,'showLogin'])->name('login');

route::post('/login',[LoginController::class,'login'])->name('login.post');

route::post('/logout',[LoginController::class,'logout'])->name('logout');



/*
|--------------------------------------------------------------------------
| DASHBOARD PRINCIPAL
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if ($user->role === 'professeur') {
        return redirect()->route('prof.dashboard');
    }

    if ($user->role === 'etudiant') {
        return redirect()->route('etudiant.dashboard');
    }

    return redirect()->route('accueil.index');

})->middleware(['auth', 'verified'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| ROUTES PROTEGEES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');

    route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');

    route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.destroy');


    /*
    |--------------------------------------------------------------------------
    | ETUDIANT
    |--------------------------------------------------------------------------
    */

    route::get('/index',[EtudiantController::class,'index'])->name('etudiant.index');

    route::get('/etudiant/dashboard',[EtudiantController::class,'dashboard'])->name('etudiant.dashboard');

    route::get('/etudiant/profil',[EtudiantController::class,'profil'])->name('etudiant.profil');

    route::get('/etudiant/profil_apprentissage',[EtudiantController::class,'profil_apprentissage'])->name('etudiant.profil_apprentissage');

    route::get('/etudiant/cours',[EtudiantController::class,'cours'])->name('etudiant.cours');

    route::get('/etudiant/examens',[EtudiantController::class,'examens'])->name('etudiant.examens');

    route::get('/etudiant/statistiques',[EtudiantController::class,'statistiques'])->name('etudaint.statistiques');

    route::get('/etudiant/parametres',[EtudiantController::class,'parametres'])->name('etudiant.parametres');
    Route::put(
    '/etudiant/parametres',
    [EtudiantController::class, 'updateParametres']
)->name('etudiant.parametres.update');
Route::post(
    '/etudiant/profil-apprentissage',
    [EtudiantController::class, 'enregistrerProfilApprentissage']
)->name('etudiant.profil.apprentissage');


    /*
    |--------------------------------------------------------------------------
    | ADMINISTRATEUR
    |--------------------------------------------------------------------------
    */

    route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

    route::get('/admin/cours',[AdminController::class,'cours'])->name('admin.cours');

    route::get('/admin/classes',[AdminController::class,'classes'])->name('admin.classes');

    route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');

    route::get('/admin/parametres',[AdminController::class,'parametres'])->name('admin.parametres');

    route::get('/admin/statistiques',[AdminController::class,'statistiques'])->name('admin.statistiques');

    route::get('/admin/etudiants',[Admincontroller::class,'etudiants'])->name('admin.etudiants');

    Route::get('/admin/professeurs', [AdminController::class, 'professeurs'])->name('admin.professeurs');

    route::get('admin/examens',[AdminController::class,'examens'])->name('admin.examens');

    route::post('/admin/modifier-compte',[AdminController::class,'modifierCompte'])->name('admin.modifier.compte');

    route::post('/admin/modifier-mot-de-passe',[AdminController::class,'modifierMotDePasse'])->name('admin.modifier.password');


    /*
    |--------------------------------------------------------------------------
    | PROFESSEUR
    |--------------------------------------------------------------------------
    */

    route::get('/prof/dashboard',[ProfesseursController::class,'dashboard'])->name('prof.dashboard');

    route::get('/prof/cours',[ProfesseursController::class,'cours'])->name('prof.cours');

    route::get('/prof/parametres',[ProfesseursController::class,'parametres'])->name('prof.parametres');

    route::put('/prof/parametres/compte',[ProfesseursController::class,'modifierCompte'])->name('prof.parametres.compte');

    route::put('/prof/parametres/mot-de-passe',[ProfesseursController::class,'modifierMotDePasse'])->name('prof.parametres.password');

    route::get('/prof/statistiques',[ProfesseursController::class,'statistiques'])->name('prof.statistiques');

    route::get('/prof/examens',[ProfesseursController::class,'examens'])->name('prof.examens');

    route::get('/prof/etudiants',[ProfesseursController::class,'etudiants'])->name('prof.etudiants');


    /*
    |--------------------------------------------------------------------------
    | CLASSES
    |--------------------------------------------------------------------------
    */

    route::post('/classe/store',[AdminController::class,'store'])->name('classe.ajout');

    Route::put('/admin/classes/{classe}', [AdminController::class, 'updateClasse'])->name('admin.classes.update');

    Route::delete('/admin/classes/{classe}', [AdminController::class, 'destroyClasse'])->name('admin.classes.destroy');

    Route::get('/admin/classes/{classe}', [AdminController::class, 'showClasse'])->name('admin.classes.show');


    /*
    |--------------------------------------------------------------------------
    | COURS
    |--------------------------------------------------------------------------
    */

    route::post('/cours/ajoutcours',[ProfesseursController::class,'ajoutcours'])->name('cours.ajout');


    /*
    |--------------------------------------------------------------------------
    | EXAMENS
    |--------------------------------------------------------------------------
    */

    route::post('/examens/ajoutexamen',[ProfesseursController::class,'ajoutExamen'])->name('examen.ajout');

});


/*
|--------------------------------------------------------------------------
| AUTH.PHP
|--------------------------------------------------------------------------
*/
 require __DIR__.'/auth.php';

