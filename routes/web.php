<?php

use App\Http\Controllers\TestControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;

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

 //Route::get('/Home', function(){
  //  return view('Home');
//});
Route::get('/tp', function(){
    return view('tp/from');
});
Route::get('/', [etudiantController::class,'create']);
Route::post('/ajouteleve', [etudiantController::class,'store'])->name('ajouter');
Route::get('/index', [etudiantController::class,'index']);

Route::get('/tazanou', function(){
    return view('tazanou/from');
});