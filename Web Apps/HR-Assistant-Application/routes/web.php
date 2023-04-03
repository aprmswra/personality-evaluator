<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('test');
});

Route::get('/login', function () {
    return view('pages.login.login');
});

Route::get('/register', function () {
    return view('pages.login.register');
});

Route::get('/candidate', function () {
    return view('pages.candidate.index');
});

Route::get('/employee', function () {
    return view('pages.employee.index');
});

Route::get('/personality', function () {
    return view('pages.personality.index');
});

// Route::get('/test', [TestController::class, 'index']);
Route::post('/chat', [TestController::class, 'index'])->name('chat');
