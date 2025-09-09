<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts-manager', function () {
    return view('posts-manager');
})->name('posts.manager');


