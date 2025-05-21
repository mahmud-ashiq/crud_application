<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add', function () {
    return view('add');
});
Route::post('/create', [ProjectController::class, 'create'])->name('create');

Route::get('/view/{id}', [ProjectController::class, 'viewProject'])->name('view');