<?php

use App\Http\Controllers\ImportOffersController;
use Illuminate\Support\Facades\Route;

Route::get('/import/offers', ImportOffersController::class);
