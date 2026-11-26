<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.admin.onboarding');
})->name('onboarding');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');


    Route::get('/contacts', function (){
        return view('pages.admin.contacts');
    })->name('contacts');

    Route::get('/projects', function (){
        return view('pages.admin.projects');
    })->name('projects');

    Route::get('/jiri', function () {
        return view('pages.admin.jiri');
    })->name('jiri.index');

    Route::get('/jiri/create', function () {
        return view('pages.admin.create-jiri');
    })->name('jiri.create');

    Route::get('/jiri/create', function () {
        return view('pages.admin.create-jiri');
    })->name('jiri.create');

    Route::get('/account', function (){
        return view('pages.admin.account');
    })->name('account');


});

