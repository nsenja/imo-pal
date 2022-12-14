<?php

use App\Http\Controllers\ImoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ImoController::class, 'index'])->name('users.index');
Route::post('/users/create', [ImoController::class, 'store'])->name('users.store');
Route::get('/details/{id}', [ImoController::class, 'show'])->name('users.detail');
