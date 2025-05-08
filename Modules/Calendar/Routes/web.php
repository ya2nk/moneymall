<?php

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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::prefix('calendar')->group(function() {
        Route::get('/', 'CalendarController@index');
        Route::post('data', 'CalendarController@data');
        Route::get('row', 'CalendarController@row');
        Route::post('save', 'CalendarController@save');
        Route::post('delete', 'CalendarController@delete');
    });
});
