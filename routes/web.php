<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return Inertia::render('old/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
n
});
*/


Route::get('/', [PhoneController::class, "main"]);
Route::get('/number/{number}', [PhoneController::class, "numberPage"]);
Route::get('/page/{page}', [PhoneController::class, "phoneList"]);

Route::get('/codes/{code}', function (string $code) {
    return Inertia::render('Code',['code' => $code]);
});
Route::get('/codes', function () {
    return Inertia::render('Numbercodes');
});

require __DIR__.'/auth.php';
