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
    return view('welcome');
})->name('/'); 

Route::group(['prefix' => 'dashboard',  'middleware' => ['auth', 'verified']], function()
{
    Route::get('/', function(){
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/account_settings', function(){
        return view('dashboard.account_settings');
    })->name('dashboard.account_settings');
    
});

require __DIR__.'/auth.php';
