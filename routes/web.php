<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'index']);
Route::get('/sample', [PageController::class, 'sample']);
Route::get('/anotherSample', function(){
    return "hello world";
});

Route::get('/user/profile', function () {
    return "success!";
})->name('profile');