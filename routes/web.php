<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\ElectorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SenatorController;
use App\Http\Controllers\GovernorController;
use App\Http\Controllers\ParlementaireController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
Route::view('admin','admin')
->middleware(['auth','verified','admin'])
->name('admin');

Route::view('governor','governor')
->middleware(['auth','verified','governor'])
->name('governor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
});

require __DIR__.'/auth.php';
Route::middleware(['auth','admin','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class, 'showdash']);
    //states
    Route::get('/state', [StateController::class, 'showStateHome']);
    Route::get('/newstate', [StateController::class, 'showStateCreate']);
    Route::get('/delstate{id}', [StateController::class, 'showStateDelete']);
    Route::post('/postState', [StateController::class, 'createState']);
    Route::get('/delstate/{id}', [StateController::class, 'deleteState']);
    Route::get('/edstate/{id}', [StateController::class, 'updateState']);
    Route::put('/edstate/{id}', [StateController::class, 'update']);
    //flags
    Route::get('/flag', [FlagController::class, 'showFlagHome']);
    Route::get('/newflag', [FlagController::class, 'showFlagCreate']);
    Route::get('/delflag/{id}', [FlagController::class, 'deleteFlag']);
    Route::post('/postflag', [FlagController::class, 'createFlag']);
    Route::get('/edflag/{id}', [FlagController::class, 'updateFlag']);
    Route::put('/edflag/{id}', [FlagController::class, 'update']);
    //party
    Route::get('/party', [PartyController::class, 'showPartyHome']);
    Route::get('/newparty', [PartyController::class, 'showPartyCreate']);
    Route::get('/delparty/{id}', [PartyController::class, 'deleteParty']);
    Route::post('/postparty', [PartyController::class, 'createParty']);
    Route::get('/edparty/{id}', [PartyController::class, 'updateParty']);
    Route::put('/edparty/{id}', [PartyController::class,'update']);
    //governor
    Route::get('/governor', [GovernorController::class, 'showGovernorHome']);
    Route::get('/newgovernor', [GovernorController::class, 'showGovernorCreate']);
    Route::post('/postgovernor', [GovernorController::class, 'createGovernor']);
    Route::get('/delgovernor/{id}', [GovernorController::class, 'deleteGovernor']);
    Route::get('/edgovernor/{id}', [GovernorController::class, 'updateGovernor']);
    Route::put('/edgovernor/{id}', [GovernorController::class, 'update']);
    //senator
    Route::get('/senator', [SenatorController::class, 'showSenatorHome']);
    Route::get('/newsenator', [SenatorController::class, 'showSenatorCreate']);
    Route::post('/postsenator', [SenatorController::class, 'createSenator']);
    Route::get('/delsenator/{id}', [SenatorController::class, 'deleteSenator']);
    Route::get('/edsenator/{id}', [SenatorController::class, 'updateSenator']);
    Route::put('/edsenator/{id}', [SenatorController::class, 'update']);
    //parliament
    Route::get('/parle', [ParlementaireController::class, 'showParlementaireHome']);
    Route::get('/newparle', [ParlementaireController::class, 'showParlementaireCreate']);
    Route::post('/postparle', [ParlementaireController::class, 'createParlementaire']);
    Route::get('/delparle/{id}', [ParlementaireController::class, 'deleteParlementaire']);
    Route::get('/edparle/{id}', [ParlementaireController::class, 'updateparlementaire']);
    Route::put('/edparle/{id}', [ParlementaireController::class, 'update']);
    //elector
    Route::get('/elector', [ElectorController::class, 'showElectorHome']);
    Route::get('/newElector', [ElectorController::class, 'showElectorCreate']);
    Route::post('/postelector', [ElectorController::class, 'createelector']);
    Route::get('/delelector/{id}', [ElectorController::class, 'deleteelector']);
    Route::get('/edelector/{id}', [ElectorController::class, 'updateelector']);
    Route::put('/edelector/{id}', [ElectorController::class, 'update']);
});
Route::middleware(['auth','governor','role:governor'])->group(function(){
    Route::get('governor/dashboard',[GovernorController::class, 'showdash']);
});
//common routes controllers
//states



//flags



//party


//governor


//senator


//elector


