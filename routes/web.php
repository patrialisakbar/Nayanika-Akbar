<?php

use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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



Auth::routes();

route::get('/', [PostController::class, 'index'])->name('home');
route::get('/home', [PostController::class, 'index'])->name('home');
route::get('/create', [PostController::class, 'create']);
route::post('/saveblog', [PostController::class, 'store']);
route::get('/edit/{id}', [PostController::class, 'edit']);
route::put('/updateblog/{id}', [PostController::class, 'update']);
route::get('/delete/{id}', [PostController::class, 'destroy']);
