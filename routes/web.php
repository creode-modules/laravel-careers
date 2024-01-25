<?php

use Illuminate\Support\Facades\Route;

Route::get('/careers/{career:slug}', CareerController::class);
