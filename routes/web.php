<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvprojecter and all of them will
| be assigned to the "web" mprojectdleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index'); // index.blade.php
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/subjects',[SubjectController::class ,"subject"])->middleware('auth'); //page with listed subjects

// Route::get('/projects/create',[SubjectController::class ,"create"])->name("projects.create");  //create new subject

// Route::post('/projects',[SubjectController::class ,"store"]);  //store new subject

// Route::get('/projects/{project}/edit',[SubjectController::class ,"edit"]); //edit subject

// Route::put('/projects/{project}',[SubjectController::class ,"update"]); //update subject

// Route::get('/projects/{project}',[SubjectController::class ,"show"]); 

// Route::delete('/projects/{project}',[SubjectController::class ,"destroy"]); 

Route::resource('projects', SubjectController::class)->middleware('auth'); //all routes for CRUD

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tasks', TaskController::class)->middleware('auth'); 