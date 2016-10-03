<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/convert_cur', [
    'uses' => 'CurrencyController@getConversion_Cur',
    'as' => 'convert_cur'
]);


Route::post('/signin', [
    'uses' => 'PersonController@postSignIn',
    'as' => 'signin'
]);

Route::get('/conversion', [
    'uses' => 'CurrencyController@getConversion',
    'as' => 'conversion'
]);

Route::post('/logout', [
    'uses' => 'PersonController@logout',
    'as' => 'logout'
]);

Route::post('/man_convert', [
    'uses' => 'CurrencyController@postCreateCurrency',
    'as' => 'man_convert'
]);

Route::post('/cal_currency', [
    'uses' => 'CurrencyController@postConvert',
    'as' => 'cal_currency'
]);

Route::post('/reset_all', [
    'uses' => 'CurrencyController@postResetAll',
    'as' => 'reset_all'
]);

Route::get('/delete-currency/{curren_id}', [
    'uses' => 'CurrencyController@getDeletePost',
    'as' => 'currency.delete'
]);