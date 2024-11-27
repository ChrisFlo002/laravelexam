<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovernorController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\ElectorController;
use App\Http\Controllers\SenatorController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\ParlementaireController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('admin','admin')
->middleware(['auth','verified','admin'])
->name('admin');

Route::view('governor','governor')
->middleware(['auth','verified','governor'])
->name('governor');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth','admin','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class, 'showdash']);
    //states
    Route::get('/newstate', [StateController::class, 'showStateCreate']);
    Route::get('/delstate{id}', [StateController::class, 'showStateDelete']);
    Route::post('/postState', [StateController::class, 'createState']);
    Route::get('/delstate/{id}', [StateController::class, 'deleteState']);
    Route::get('/edstate/{id}', [StateController::class, 'updateState']);
    Route::put('/edstate/{id}', [StateController::class, 'update']);
    //flags
    Route::get('/newflag', [FlagController::class, 'showFlagCreate']);
    Route::get('/delflag/{id}', [FlagController::class, 'deleteFlag']);
    Route::post('/postflag', [FlagController::class, 'createFlag']);
    Route::get('/edflag/{id}', [FlagController::class, 'updateFlag']);
    Route::put('/edflag/{id}', [FlagController::class, 'update']);
    //party
    Route::get('/newparty', [PartyController::class, 'showPartyCreate']);
    Route::get('/delparty/{id}', [PartyController::class, 'deleteParty']);
    Route::post('/postparty', [PartyController::class, 'createParty']);
    Route::get('/edparty/{id}', [PartyController::class, 'updateParty']);
    Route::put('/edparty/{id}', [PartyController::class,'update']);
    //governor
    Route::get('/newgovernor', [GovernorController::class, 'showGovernorCreate']);
    Route::post('/postgovernor', [GovernorController::class, 'createGovernor']);
    Route::get('/delgovernor/{id}', [GovernorController::class, 'deleteGovernor']);
    Route::get('/edgovernor/{id}', [GovernorController::class, 'updateGovernor']);
    Route::put('/edgovernor/{id}', [GovernorController::class, 'update']);
    //senator
    Route::get('/newsenator', [SenatorController::class, 'showSenatorCreate']);
    Route::post('/postsenator', [SenatorController::class, 'createSenator']);
    Route::get('/delsenator/{id}', [SenatorController::class, 'deleteSenator']);
    Route::get('/edsenator/{id}', [SenatorController::class, 'updateSenator']);
    Route::put('/edsenator/{id}', [SenatorController::class, 'update']);
    //parliament
    Route::get('/newparle', [SenatorController::class, 'showParleCreate']);
    Route::post('/postparle', [SenatorController::class, 'createParle']);
    Route::get('/delparle/{id}', [SenatorController::class, 'deleteParle']);
    Route::get('/edparle/{id}', [SenatorController::class, 'updateparle']);
    Route::put('/edparle/{id}', [SenatorController::class, 'update']);
    //elector
    Route::get('/newElector', [ElectorController::class, 'showElectorCreate']);
    Route::post('/postelector', [ElectorController::class, 'createelector']);
    Route::get('/delelector/{id}', [ElectorController::class, 'deleteelector']);
    Route::get('/edelector/{id}', [ElectorController::class, 'updateelector']);
    Route::put('/edelector/{id}', [ElectorController::class, 'update']);
});
Route::middleware(['auth','role:governor'])->group(function(){
    Route::get('governor/dashboard',[UserController::class, 'showdash']);
});
//common routes controllers
//states
Route::get('/state', [StateController::class, 'showStateHome']);


//flags
Route::get('/flag', [FlagController::class, 'showFlagHome']);


//party
Route::get('/party', [PartyController::class, 'showPartyHome']);

//governor
Route::get('/governor', [GovernorController::class, 'showGovernorHome']);

//senator
Route::get('/senator', [SenatorController::class, 'showSenatorHome']);

//elector
Route::get('/elector', [ElectorController::class, 'showElectorHome']);

