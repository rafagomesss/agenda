<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ContactController,
    AuthController
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

Route::controller(ContactController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index')->name('contact.index');
    Route::get('/contact/cadastrar', 'create')->name('contact.create');
    Route::post('/contact', 'store')->name('contact.store');
    Route::get('/contact/editar', 'edit')->name('contact.edit');
    Route::get('/contact/excluir', 'delete')->name('contact.delete');
    Route::post('/contact/update', 'update')->name('contact.update');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('auth.access');

    Route::get('/login/registrar', 'register')->name('auth.register');
    Route::post('/login/create', 'create')->name('auth.create');
    ROute::get('/logout', 'logout')->name('auth.logout');
});
