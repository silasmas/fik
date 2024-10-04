<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\MessegeController;
use App\Http\Controllers\ProfileController;

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

Route::get('/symlink', function () {
    return view('symlink');
})->name('generate_symlink');

Route::get('/', [AccueilController::class, 'index'])->name('home');
Route::get('/apropos', [AccueilController::class, 'about'])->name('apropos');
Route::get('/activites', [AccueilController::class, 'activites'])->name('activites');
Route::get('/team', [AccueilController::class, 'archives'])->name('team');
Route::get('/don', [DonController::class, 'index'])->name('don');
Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');
Route::get('/detailActivite/{id}', [AccueilController::class, 'show'])->name('detailActivite');
Route::get('/detailArchive/{id}', [AccueilController::class, 'detailArchive'])->name('detailArchive');

Route::post('addNewsletter', [MessegeController::class, 'save'])->name('addNewsletter');
Route::post('sendMessage', [MessegeController::class, 'store'])->name('sendMessage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
