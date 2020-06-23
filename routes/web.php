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
Route::view('/webprog', 'pages.programming');

Route::get('/shop/',                    'ShopController@show')->name('showShop');
Route::get('/shop/{category}',          'ShopController@index')->name('indexShop');
Route::get('/shop/items/{itemcard}',    'ShopController@item')->name('itemShop');

// Очистка кеша
Route::get('/clear', function() {
    
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
        
    return "Кэш очищен.";
});
