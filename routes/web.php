<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendingStatementsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowStatementsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreStatementController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware('auth')->group(function() {
    Route::prefix('statement')->group(function() {
        Route::get('/pending',   [ShowStatementsController::class, 'pending'])  ->name('pending-statements');
        Route::get('/confirmed', [ShowStatementsController::class, 'confirmed'])->name('confirmed-statements');
        Route::get('/rejected',  [ShowStatementsController::class, 'rejected']) ->name('rejected-statements');
        Route::post('/store',    [StoreStatementController::class, 'store'])    ->name('store-statement');
        Route::get('/',          [StoreStatementController::class, 'showForm']) ->name('leave-statement');
    });
});



Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login-page');
Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('register-page');

Route::post('/login/check', [AuthController::class, 'login'])->name('login');
Route::post('/register/check', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile/', [ProfileController::class, 'index'])->middleware('auth')->name('profile');

Route::get('/admin', [PendingStatementsController::class, 'show'])->middleware('auth');
