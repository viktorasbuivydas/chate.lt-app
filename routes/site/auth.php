<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
});
