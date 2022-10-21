<?php

use App\Http\Controllers\Auth\CallbackController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix("/auth")->group(function() {
    Route::controller(CallbackController::class)->group(function(){
        // Route::get("redirect", "getRedirect");
        // Route::get("callback", "getCallback");
    });
});

require __DIR__.'/auth.php';
