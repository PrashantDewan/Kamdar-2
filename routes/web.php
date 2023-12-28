<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/post', [HomeController::class, 'post'])->middleware(['auth','worker'])->name('post');

Route::get ('/userHome', [HomeController::class,'index'])->middleware(['auth', 'verified'])->name('userHome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==========================User Route=====================================================
Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth','user']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});


// =============================WorkerRoute===================================================
Route::group(['prefix' => 'worker', 'as' => 'worker.','middleware' => ['auth', 'worker']], function () {
    Route::get('/post', [HomeController::class, 'post'])->name('post');
});



require __DIR__.'/auth.php';
/* user routes */

