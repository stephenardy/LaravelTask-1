<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [InventoryController::class, 'index']);
Route::get('/inventory/add', [InventoryController::class, 'addItem']);
Route::get('delete/{id}', [InventoryController::class, 'done']);
// Route::get('/inventory/edit', [InventoryController::class, 'editItem']);
Route::get('edit/{id}', [InventoryController::class, 'editItem']);

Route::post('/inventory/create', [InventoryController::class, 'inventoryCreate']);
Route::post('/inventory/update', [InventoryController::class, 'inventoryEdit']);