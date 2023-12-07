<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'accueilcontroller'])->name('main.accueil');

Route::get('/cours', [MainController::class, 'courscontroller'])->name('main.cours');

Route::get('/tarifs', [MainController::class, 'tarifscontroller'])->name('main.tarifs');

Route::get('/contact', [MainController::class, 'contactcontroller'])->name('main.contact');

Route::get('/mentions-legales', [MainController::class, 'mentions-legalescontroller'] )->name('main.mentions-legales');