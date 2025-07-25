<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ { FrontPagesController, AuthController };
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes - Frontend routes.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function() {
    Route::get( '/', [ FrontPagesController::class, 'index' ] )->name( 'index' );
    Route::get( 'articles', [ FrontPagesController::class, 'articles' ] )->name( 'articles' );
    Route::get( 'article/{slug}', [ FrontPagesController::class, 'articleDetail' ] )->name( 'article.detail' );
    Route::get( 'trading-support', [ FrontPagesController::class, 'tradingSupport' ] )->name( 'trading-support' );
    Route::get( 'download', [ FrontPagesController::class, 'download' ] )->name( 'download' );
    Route::get( 'contact', [ FrontPagesController::class, 'contact' ] )->name( 'contact' );
    Route::get( 'about', [ FrontPagesController::class, 'about' ] )->name( 'about' );
    Route::get( 'promo', [ FrontPagesController::class, 'promo' ] )->name( 'promo' );

    Route::get( 'trading-support/economic-calendar', [ FrontPagesController::class, 'tradingSupportCalendar' ] )->name( 'trading-support.calendar' );
    Route::get( 'trading-support/{type}', [ FrontPagesController::class, 'tradingSupportByType' ] )->name( 'trading-support.type' );
    
    Route::get( 'policy/{type}',[FrontPagesController::class, 'policy' ] )->name('policy');

    Route::get("signin",[FrontPagesController::class, "signin"])->name("signin");
    Route::post("signin",[AuthController::class,"signin"])->name("signin.post");

    Route::get("register",[FrontPagesController::class, "register"])->name("register");
    Route::post("register",[AuthController::class,"register"])->name("register.post");
});


