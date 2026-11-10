<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.admin.homepage');
})->name('homepage');

Route::get('/contacts', function (){
    return view('pages.admin.contacts');
})->name('contacts');

Route::get('/projects', function (){
    return view('pages.admin.projects');
})->name('projects');

Route::get('/jiri', function (){
    return view('pages.admin.jiri');
})->name('jiri');

Route::get('/jiri/create', function () {
    return view('pages.admin.create-jiri');
})->name('jiri.create');

Route::get('/account', function (){
    return view('pages.admin.account');
})->name('account');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

