<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('/form',[StudentController::class,'emp']);

Route::get('/index', [StudentController::class,'index']);
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/fetchall',[StudentController::class,'fetchAll'])->name('fetchAll');
Route::get('/delete/{roll}',[StudentController::class,'delete'])->name('delete');
Route::get('/edit',[StudentController::class,'edit'])->name('edit');
Route::post('/update',[StudentController::class,'update'])->name('update');


// Route::get('/home',[CityController::class,'home']);
// Route::post('/c_store',[CityController::class,'c_store'])->name('c.store');
// Route::get('/destroy/{city}',[CityController::class,'destroy'])->name('destroy');
// Route::get('/fetchall',[CityController::class,'fetchAll'])->name('fetchAll');
// Route::get('/show',[CityController::class,'getFile'])->name('show');

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/address', [LocationController::class, 'addressCity'])->name('addressCity');
Route::post('/insert',[LocationController::class,'insert'])->name('insert');
Route::get('/destroyCity/{city}',[LocationController::class,'destroyCity'])->name('deleteCity');
Route::get('/destroyDistrict/{district}',[LocationController::class,'destroyDistrict'])->name('deleteDistrict');
// Route::post('/insertDistrict',[LocationController::class,'insertDistrict'])->name('insertDistrict');

Route::get('/loan', [LoanController::class,'loan'])->name('loan');
Route::post('/lonestore',[LoanController::class,'storeer'])->name('l.store');
Route::post('/lonetablestore',[LoanController::class,'storestoretableer'])->name('t.store');
Route::get('/fetchallloan',[LoanController::class,'fetchAll'])->name('l.fetchAll');