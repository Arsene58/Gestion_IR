<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BordereauController;
use App\Http\Controllers\Clients\ClientsController;
use App\Http\Controllers\Admin\EntrepriseController;
use App\Http\Controllers\Clients\FrontClientController;

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


// ============================================================ START CLIENT BORDEREAU ==================================

Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
Route::post('logged', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function(){

    Route::get('/client_dshbrd', [FrontClientController::class, 'index'])->name('front_client');




    // ============================== CLIENT =============================

    Route::get('/client', [FrontClientController::class, 'clients'])->name('table_client');
    Route::post('/add_client', [ClientsController::class, 'add_clients'])->name('add_clients');
    Route::get('/edit_client/{client}', [ClientsController::class, 'get_clients'])->name('edit_clients');
    Route::post('/update_client/{client}', [ClientsController::class, 'update_clients'])->name('update_clients');

    Route::post('/destroy_clients/{bordereau}', [ClientsController::class, 'destroy_clients'])->name('destroy_clients');


    // ============================== END CLIENT =============================

    Route::get('/retours', [FrontClientController::class, 'retours'])->name('retours');


    // ============================== BORDEREAU =============================
    Route::get('/list_bordereaux', [FrontClientController::class, 'liste_bordereaux'])->name('liste_bordereaux');
    Route::get('/add_bordereau', [BordereauController::class, 'add_bordereau'])->name('add_bordereau');
    Route::get('/edit_bordereau/{bordereau}', [BordereauController::class, 'get_bordereau'])->name('edit_bordereau');
    Route::post('/update_bordereau/{bordereau}', [BordereauController::class, 'update_bordereau'])->name('update_bordereau');
    Route::post('/destroy_bordereau/{bordereau}', [BordereauController::class, 'destroy_bordereau'])->name('destroy_bordereau');
    // =============================== END BORDEREAU =============================

    Route::get('/verification', [FrontClientController::class, 'verification'])->name('verification');



});


Route::get('get_entreprise', [EntrepriseController::class, 'get_entreprise'])->name('entreprise');
Route::post('add_entreprise', [EntrepriseController::class, 'add_entreprise'])->name('add_entreprise');
Route::get('edit_entreprise/{id}', [EntrepriseController::class, 'edit_entreprise'])->name('edit_entreprise');
Route::post('update_entreprise', [EntrepriseController::class, 'update_entreprise'])->name('update_entreprise');
Route::post('delete_entreprise', [EntrepriseController::class, 'delete_entreprise'])->name('delete_entreprise');


// ============================================================ END CLIENT BORDEREAU ==================================