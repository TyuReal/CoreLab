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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'welcome');
Route::view('/webprog', 'pages.webprog');
Route::view('/shop', 'pages.shop');

// Очистка кеша
Route::get('/clear', function() {
    
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
        
    return "Кэш очищен.";
});

/*
// Просто переход на страницу, без контроллера
Route::get('webprog', function()
{
    return View::make('pages.webprog');
});
Route::get('shop', function()
{
    return View::make('pages.shop');
});
*/