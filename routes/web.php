<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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


Route::get('/test', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/edit2/{id}', [TasksController::class, 'inlineEdit']);
Route::get('/tasks/{id}', [TasksController::class, 'show']);
Route::put('/tasks/{id}', [TasksController::class, 'edit']);
Route::post('/tasks', [TasksController::class, 'store']);
Route::delete('tasks/{id}', [TasksController::class, 'destroy']);
