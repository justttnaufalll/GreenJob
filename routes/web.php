<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTanamanController;
use App\Http\Controllers\PlantController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/view', [DashboardController::class, 'view'])->name('view');
Route::get('/details', [DashboardController::class, 'detail'])->name('details');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/datatanaman', [DataTanamanController::class, 'index'])->name('datatanaman');

    Route::get('/tambah', [DataTanamanController::class, 'create'])->name('tambah');
    Route::post('/insertdata', [DataTanamanController::class, 'insertdata'])->name('insertdata');

    Route::get('/editdata/{id}', [DataTanamanController::class, 'editdata'])->name('editdata');
    Route::post('/updatedata/{id}', [DataTanamanController::class, 'updatedata'])->name('updatedata');

    Route::get('/delete/{id}', [DataTanamanController::class, 'delete'])->name('delete');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');
});
