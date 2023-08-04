<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



Route::get('/', function () {
    return view('auth.login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
