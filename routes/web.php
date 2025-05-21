<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

//home
Route::get('/', function () {
    return view('home');
})->name('home');

 //add project
Route::get('/add', function () {
    return view('add');
});
Route::post('/create', [ProjectController::class, 'create'])->name('create');

//view project
Route::get('/view/{id}', [ProjectController::class, 'viewProject'])->name('view');

//edit project
Route::get('/edit/{id}', [ProjectController::class, 'editProject'])->name('edit');
Route::post('/update/{id}', [ProjectController::class, 'updateProject'])->name('update');

//delete project
Route::post('/delete/{id}', [ProjectController::class, 'deleteProject'])->name('delete');