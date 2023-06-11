<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SnowmenController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // HOUSES
    Route::get('/houses', [HouseController::class,'index'])->name('houses.index');
    Route::get('/houses/create', [HouseController::class,'create'])->name('houses.create');
    Route::post('/houses/store', [HouseController::class,'store'])->name('houses.store');
    Route::get('/houses/{product}', [HouseController::class,'show'])->name('houses.show');
    // Route::get('/houses/{product}', [HouseController::class,'edit'])->name('houses.edit');
    // Route::put('/houses/{product}', [HouseController::class,'update'])->name('houses.update');
    Route::delete('/houses/{product}', [HouseController::class,'destroy'])->name('houses.destroy');


    // SNOWMEN
    Route::get('/snowmen', [SnowmenController::class,'index'])->name('snowmen.index');
});



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
