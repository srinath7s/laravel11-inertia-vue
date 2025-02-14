<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::resource('posts', PostController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
