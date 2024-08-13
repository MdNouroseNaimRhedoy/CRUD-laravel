<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome',['posts' => Post::all()]);
})->name('home');

Route::get('/create', [PostController:: class,'create']);

Route::post('/store', [PostController:: class,'storeData'])->name("store");

Route::get('/edit', [PostController:: class,'editData'])->name("edit");
