<?php

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// xtahu kenapa xjadi buat mcm ni
// use App\Http\Controllers\StudentsController;
// Route::get('/', [StudentsController::class, 'index']);
// Route::get('/', [StudentsController::class, '__construct']);

Route::get('/', function () {
    return view('welcome');
});

// Route::resource bolehkan kita untuk suruh controller buat keje kalau uri tertentu dimention

// Route::resource('/', 'App\Http\Controllers\StudentsController');
// Route::resource('students', 'App\Http\Controllers\StudentsController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//untuk tujuan security, boleh tambah " Route::middleware(['auth:sanctum', 'verified'])->"command"('uri', 'controller @ fnction')
//command = resource, get ...

Route::middleware(['auth:sanctum', 'verified'])->resource('/students', 'App\Http\Controllers\StudentsController');

//klu buat ni guest nak g home pon dia direct ke login
// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('welcome');
// })->name('welcome');
