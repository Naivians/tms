<?php

use App\Http\Controllers\LoginController;
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
    return view('login');
});

// login routes
Route::get('/register', [LoginController::class, 'redirectToAccount'])->name('Logins.redirectToAccount');
Route::get('/login', [LoginController::class, 'redirectToLogin'])->name('Logins.redirectToLogin');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/open-ticket', function () {
    return view('open_ticket');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/ticket-list', function () {
    return view('ticket_list');
});

Route::get('/create-id', function () {
    return view('create_id');
});

