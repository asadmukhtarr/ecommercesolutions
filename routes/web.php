<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookCrud;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', BookCrud::class);

