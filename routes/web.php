<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookCrud;
use App\Livewire\SchoolCrud;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', BookCrud::class);
Route::get('/schools',SchoolCrud::class);
