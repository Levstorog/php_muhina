<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//     $a = 3;
//     $b = 5;
//     $c = $a + $b;
//     return view('index', compact('a','b','c'));
// });


Route::get('/index', [MainController::class, 'show'])->name('index');