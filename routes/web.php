<?php

use App\Livewire\Listing;
use App\Livewire\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Listing::class)->name('listing');
Route::get('/{post:slug}', Show::class)->name('show');
