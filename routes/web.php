<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('user/{user}', function(\App\Models\User $user) {
    dd($user);
    return $user;
});

Route::prefix('usuarios')->group(function() {
    Route::get('', function() {
        return 'usuarios';
    })->name('usuarios');
    Route::get('/{id}', function() {
        return 'Mostrar detalhes';
    })->name('usuarios_show');
    Route::get('/{id}/tags', function() {
        return 'Tags do usuários';
    })->name('usuarios_tags');
});

Route::get('/empresa/{string?}', function ($string = null) {
    return $string;
    // return view('welcome');
})->name('empresa');
