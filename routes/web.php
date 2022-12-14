<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

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

Route::get(
    '/',
    function () {
        return Inertia::render(
            'Welcome',
            [
                'title' => 'Welcome',
            ]
        );
    }
)->name( 'welcome' );

Route::get(
    '/login',
    function () {
        return Inertia::render(
            'Login',
            [
                'title' => 'Login',
            ]
        );
    }
)->name( 'Login' );

// Route::get(
//     '/dashboard',
//     function () {
//         return Inertia::render(
//             'Dashboard',
//             [
//                 'title' => 'Dashboard',
//             ]
//         );
//     }
// )->name( 'dashboard' )->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get(
    '/dashboard',
    function() {
        return Inertia::render(
            'Dashboard',
            [
                'title'=>'Dashboard'
            ]
            );
    }
    )->name('dashboard')->middleware('auth:sanctum');

Route::get(
    '/register',
    function () {
        return Inertia::render(
            'Register',
            [
                'title' => 'Registration',
            ]
        );
    }
)->name( 'registration' );