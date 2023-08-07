<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\InvertarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



Route::get('/', function () {
    return view('auth.login');
});

Route::resource('invertario', 'App\Http\Controllers\InvertarioController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/dash/crud', function () {
    return view('crud.index');
});
Route::get('/dash/crud/create', function () {
    return view('crud.create');
});
