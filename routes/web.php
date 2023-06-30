<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\CandidatController;

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

// Route::get('/login', function () {
//     redirect(route("login"));
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sessionConcour', [App\Http\Controllers\SessionConcourController::class, 'index'])->name('sessionConcours');
Route::get('/dossier/{dossier}', [App\Http\Controllers\DossierController::class, 'show'])->name('dossier.show');


/**Vitrine */
Route::get('/', function () {
    return view('vitrine.pages.home');
})->name('accueil');
Route::get('/actualite', function () {
    return view('vitrine.pages.actualite');
})->name('actualite');
Route::get('/contact', function () {
    return view('vitrine.pages.contact');
})->name('contact');
Route::prefix("ifnti/")->name("ifnti.")->group(
    function () {
        Route::get('/', function () {
            return redirect(route('ifnti.presentation'));
        })->name('ifnti');
        Route::get('a_propos', function () {
            return view('vitrine.pages.ifnti.about');
        })->name('presentation');
        Route::get('equipe_pedagogique', function () {
            return view('vitrine.pages.ifnti.professeurs');
        })->name('professeurs');
        Route::get('etudiants', function () {
            return view('vitrine.pages.ifnti.diplome');
        })->name('etudiants');
    }
);
Route::prefix("admission/")->name("admission.")->group(
    function () {
        Route::get('', function () {
            return redirect(route("admission.concours"));
        })->name('admission');
        Route::get('frais', function () {
            return view('vitrine.pages.admission.frais');
        })->name('frais');
        Route::get('concours', function () {
            return view('vitrine.pages.admission.concours');
        })->name('concours');
    }
);
Route::prefix("formation/")->name("formation.")->group(
    function () {
        Route::get('', function () {
            return view('vitrine.pages.formation.index');
        })->name('all');
        Route::get('base_de_deonne', function () {
            return view('vitrine.pages.formation.bd');
        })->name('cours-bd');
        Route::get('architecture_des_ordinateurs', function () {
            return view('vitrine.pages.formation.ao');
        })->name('cours-ao');
        Route::get('reseaux_securite', function () {
            return view('vitrine.pages.formation.rs');
        })->name('cours-rs');
        Route::get('programmation', function () {
            return view('vitrine.pages.formation.programmation');
        })->name('cours-programmation');
        Route::get('systeme_exploitation', function () {
            return view('vitrine.pages.formation.se');
        })->name('cours-se');
        Route::get('matiere_generale', function () {
            return view('vitrine.pages.formation.general');
        })->name('general');
    }
);



//routes d'inscription
Route::get('dossier/list', [CandidatController::class, 'index'])->name("dossier.index");
Route::get('dossier/formulaire/creation', [CandidatController::class, 'create'])->name("dossier.create");
Route::get('dossier/formulaire/edition/{dossier}', [CandidatController::class, 'edit'])->name("dossier.edit");
Route::post('dossier/enregistrement', [CandidatController::class, 'store'])->name("dossier.store");
Route::put('dossier/mis_a_jours/{dossier}', [CandidatController::class, 'update'])->name("dossier.update");
Route::get('dossier/{dossier}', [CandidatController::class, 'show'])->name("dossier.show");
Route::delete('dossier/{dossier}', [CandidatController::class, 'destroy'])->name("dossier.destroy");


Route::prefix('admission/')->name('admission.')->group(function(){
    Route::get('formulaire', function (){
        return view('admission.index');
    });
});

