<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);

Route::resource('/tasks', TaskController::class);
Route::put('/tasks/{task}/status', [TaskController::class, 'changeTaskStatus'])->name('tasks.changeStatus');