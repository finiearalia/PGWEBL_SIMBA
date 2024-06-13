<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\PolylineController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[MapController::class, 'index'])->name('index');
Route::get('/table',[MapController::class, 'table'])->name('table');

//create point
Route::post('/store-point',[PointController::class, 'store'])->name('store-point');
//Delete Point
Route::delete('/delete-point/{id}', [PointController::class, 'destroy'])->name('delete-point');
//edit point
Route::get('/edit-point/{id}', [PointController::class, 'edit'])->name('edit-point');
//update point
Route::patch('/update-point/{id}', [PointController::class, 'update'])->name('update-point');


Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard'); //yang bisa akses hanya user yang terdaftar

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//table
Route::get('/table-point', [PointController::class, 'table'])->name('table-point');
require __DIR__.'/auth.php';

//routes mengatur tata letak yang akan ditampilkan pada halaman awal
