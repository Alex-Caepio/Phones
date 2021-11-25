<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PhonesController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/phones', [PhonesController::class, "index"])->name('phone.index');
Route::get('/phones/create', [PhonesController::class, "create"])->name('phone.create');
Route::post('/phones', [PhonesController::class, "store"])->name('phone.store');
Route::get('/phones/{phone}', [PhonesController::class, "show"])->name('phone.show');
Route::get('/phones/{phone}/edit', [PhonesController::class, "edit"])->name('phone.edit');
Route::patch('/phones/{phone}', [PhonesController::class, "update"])->name('phone.update');
Route::delete('/phones/{phone}', [PhonesController::class, "delete"])->name('phone.delete');


