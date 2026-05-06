<?php

use Illuminate\Support\Facades\Route;
use App\Models\Joke;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jokes', function () {
    return response()->json(Joke::all());
});