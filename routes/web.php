<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
/**
 * Home Page
 */
Route::get('/', [HomeController::class, 'index'])->name('home');
/**
 * Pages Controller
    * 1. pages/resources
    * 2. pages/trust
    * 3. pages/app-connectors
    * 4. pages/pricing
 */
Route::controller(PagesController::class)->group(function (){
    Route::get('resources', 'Resources')->name('resources');
    Route::get('trust', 'Trust')->name('trust');
    Route::get('app-connectors', 'AppConnectors')->name('app-connectors');
    Route::get('pricing', 'Pricing')->name('pricing');
})

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
