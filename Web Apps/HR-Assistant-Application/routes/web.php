<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PersonalityController;

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

// Home
Route::get('/', function () {
    return view('test');
});

// Login
Route::get('/login', function () {
    return view('pages.login.login');
});

// Register
Route::get('/register', function () {
    return view('pages.login.register');
});

// Candidate
Route::get('/candidate', [CandidateController::class, 'index']);

// Employee
Route::get('/employee', [EmployeeController::class, 'index']);

// Personality
Route::get('/personality', [PersonalityController::class, 'index']);

// Route::get('/test', [TestController::class, 'index']);
Route::post('/chat', [TestController::class, 'index'])->name('chat');
