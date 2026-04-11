<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import your controller

// Route for getting all users
Route::get('get-all-users', [UserController::class, 'getAllUsers']);

