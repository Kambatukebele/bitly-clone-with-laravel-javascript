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
 */
Route::controller(PagesController::class)->group(function (){
    Route::prefix('pages')->group(function () {
        Route::get('/resources', 'resources')->name('resources');
        Route::get('/trust', 'trust')->name('trust');
        Route::get('/app-connectors', 'appConnectors')->name('app-connectors');
        Route::get('/pricing', 'pricing')->name('pricing');
        //why-bitly Group
        Route::prefix('why-bitly')->group(function () {
            Route::get('/bitly-101', 'bitly101')->name('bitly-101');
            Route::get('/enterprise-class', 'enterpriseClass')->name('enterprise-class');
            Route::get('/integrations-api', 'integrationsApi')->name('integrations-api');
        });
        //products Group
        Route::prefix('products')->group(function () {
            Route::get('/link-management', 'linkManagement')->name('link-management');
            Route::get('/qr-codes', 'qrCodes')->name('qr-codes');
            Route::get('/link-in-bio', 'linkInBio')->name('link-in-bio');
        });
        //Landing Group
        Route::prefix('landing')->group(function () {
            Route::get('/discover-enterprise', 'discoverEnterprise')->name('discover-enterprise');
        });
    });    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
