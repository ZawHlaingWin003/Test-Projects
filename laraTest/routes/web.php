<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\PostController;

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
    return view('home');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/show-post', [PostController::class, 'index']);
Route::post('/create-post', [PostController::class, 'store'])->name('create-post');

Route::get('/test/{id}/{more_thing}', function($var, $text){
    return "I'm sure. You wrote this id -> ". $var . " and more thing ". $text;
});

Route::get('/show-names', [NameController::class, 'showAllNames'])->name('show-names');
Route::get('/show-names?archieve')->name('archieve');
// Route::get('/get-deleted-names', [NameController::class, 'getDeletedNames']);

Route::get('/delete-name/{id}', [NameController::class, 'deleteName'])->name('delete-name');
Route::get('/restore/{id}', [NameController::class, 'restore'])->name('restore');
Route::get('/force-delete/{id}', [NameController::class, 'forceDelete'])->name('force-delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
