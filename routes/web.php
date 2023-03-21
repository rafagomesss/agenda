<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ContactController,
    LoginController
};
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

Route::get('/', [HomeController::class, 'index'])->name('contact.index');
Route::get('/contact/cadastrar', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/editar', [ContactController::class, 'edit'])->name('contact.edit');
Route::get('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');

Route::get('/login', [LoginController::class, 'login'])->name('login');
