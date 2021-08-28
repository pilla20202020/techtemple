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
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('setting', 'Backend\SettingController@index')->name('setting.index');
    Route::put('setting/update', 'Backend\SettingController@update')->name('setting.update');

    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
        Route::get('', 'Backend\DashboardController@index')->name('index');
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    

   

    Route::group(['as' => 'currency.', 'prefix' => 'currency'], function () {
        Route::get('', 'Backend\CurrencyController@index')->name('index');
        Route::get('create', 'Backend\CurrencyController@create')->name('create');
        Route::post('', 'Backend\CurrencyController@store')->name('store');
        Route::put('{currency}', 'Backend\CurrencyController@update')->name('update');
        Route::get('{currency}/edit', 'Backend\CurrencyController@edit')->name('edit');
        Route::get('{id}', 'Backend\CurrencyController@destroy')->name('destroy');

    });

    Route::group(['as' => 'contact.', 'prefix' => 'contact'], function () {
        Route::get('', 'Backend\ContactController@index')->name('index');
        Route::get('{id}', 'Backend\ContactController@destroy')->name('destroy');
    });

    Route::group(['as' => 'content.', 'prefix' => 'content'], function () {
        Route::get('', 'Backend\ContentController@index')->name('index');
        Route::get('create', 'Backend\ContentController@create')->name('create');
        Route::post('', 'Backend\ContentController@store')->name('store');
        Route::put('{content}', 'Backend\ContentController@update')->name('update');
        Route::get('{content}/edit', 'Backend\ContentController@edit')->name('edit');
        Route::get('{id}', 'Backend\ContentController@destroy')->name('destroy');

    });

    

    


   
});

Route::get('', 'Frontend\FrontendController@homepage')->name('homepage');


Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
Route::post('contact', 'Frontend\FrontendController@sendcontact')->name('send-contact');

