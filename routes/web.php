<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect('member/login');
});

Route::get('/deploy', [App\Http\Controllers\Dashboard\DashboardController::class, 'deploy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'member'], function(){

    Route::get('/login', [App\Http\Controllers\Member\MemberController::class, 'index'])->name('member.login');

});

Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
