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
use Modules\Slider\Http\Controllers\SliderController;
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => ''], function () {
        Route::resource('slider', SliderController::class);
        Route::get('slider/trashed/view', [SliderController::class, 'trashed'])->name('slider.trashed');
        Route::delete('slider/trashed/destroy/{id}', [SliderController::class, 'destroyTrash'])->name('slider.trashed.destroy');
        Route::put('slider/trashed/revert/{id}', [SliderController::class, 'revertFromTrash'])->name('slider.trashed.revert');
    });
});
