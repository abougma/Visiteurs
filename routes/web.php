<?php

use App\Models\VisiteurModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\DeblocageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/visiteur/liste',[VisiteurController::class,'index'])->name('visiteur.liste');
Route::get('/visiteur/ajouter',[VisiteurController::class,'create'])->name('visiteur.ajouter');
Route::post('visiteur/store',[VisiteurController::class,'store'])->name('visiteur.store');

Route::get('layouts/deblocage/liste',[DeblocageController::class,'index'])->name('deblocage.liste');
Route::get('layouts/deblocage/ajouter',[DeblocageController::class,'create'])->name('deblocage.ajouter');
Route::post('deblocage/store',[DeblocageController::class,'store'])->name('deblocage.store');

Route::get('layouts/societe/liste',[SocieteController::class,'index'])->name('societe.liste');
Route::get('layouts/societe/ajouter',[SocieteController::class,'create'])->name('societe.ajouter');
Route::post('societe/store',[SocieteController::class,'store'])->name('societe.store');



Route::get('layouts/dashboard',function (){
    return view('layouts.dashboard');
})->name('dashboard');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
