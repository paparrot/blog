<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Post;
use App\Livewire\Pages\Posts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/posts', Posts::class)->name('posts.list');
Route::get('/posts/{post:slug}', Post::class)->name('posts.show');
