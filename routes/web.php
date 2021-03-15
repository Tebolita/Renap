<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\PublicasController;
use Illuminate\Support\Facades\Log;
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
    return redirect()->route('publicas.index');
});

//Rutas Publicas
Route::prefix('Publicas')->name('publicas.')->group(function () {
   Route::get('/', PublicasController::class)->name('index');
   Route::post('/crearsoli', [PublicasController::class, 'create'])->name('create');
});


//Rutas de administrador
Route::prefix('administrador')->name('admin.')->group(function () {
//Rutas con middleware de por medio
Route::get('/', AdministradorController::class)->middleware('auth')->name('index');
Route::get('/login', [AdministradorController::class, 'login'])->name('login')->middleware('guest');
//Rutas normalitas
Route::post('/login', [AdministradorController::class, 'credenciales'])->name('credenciales');
Route::get('/update/{id}', [AdministradorController::class, 'update'])->name('update'); 
Route::post('/logout', [AdministradorController::class, 'logout'])->name('logout');
Route::get('/refresh/{id}', [AdministradorController::class, 'refresh'])->name('refresh'); 

});


