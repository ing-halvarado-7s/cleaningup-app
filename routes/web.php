<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InicioController;

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

Route::get('/',  [InicioController::class, 'index'])->name('inicio.index');
Route::post('inicio/store', [InicioController::class, 'store'])->name('inicio.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::group(['middleware' =>['auth']],function () {
    Route::resource('service', ServiceController::class);
});
