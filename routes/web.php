<?php

use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',
    [ForumController::class, 'Homepage'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/add_post',
    [ForumController::class, 'AddPost'])->name('add');

Route::middleware(['auth:sanctum', 'verified'])->post('/insert',
    [ForumController::class, 'insert'])->name('insert');

Route::middleware(['auth:sanctum', 'verified'])->get('/delete/{id}',
    [ForumController::class, 'delete'])->name('delete');

