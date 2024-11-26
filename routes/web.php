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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class, 'showdash']);
});
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user/dashboard',[UserController::class, 'showdash']);
});
//common routes controllers
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
//elector
Route::get('/elector', [PresElectorController::class, 'showElectorHome']);
Route::get('/newElector', [PresElectorController::class, 'showElectorCreate']);
Route::post('/postelector', [PresElectorController::class, 'createelector']);
Route::get('/delelector/{id}', [PresElectorController::class, 'deleteelector']);
Route::get('/edelector/{id}', [PresElectorController::class, 'updateelector']);
Route::put('/edelector/{id}', [PresElectorController::class, 'update']);
