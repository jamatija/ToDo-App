<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/tasks', TaskController::class);
Route::put('/tasks/{task}/status', [TaskController::class, 'changeTaskStatus'])->name('tasks.changeStatus');