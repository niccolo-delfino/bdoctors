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

// COLLEGAMENTO HOME
Route::get('/','HomeController@index')->name('home1');

// COLLEGAMENTO PAGE CONTATTI
Route::get('/contatti','PageController@contatti')->name('contatti.page');
// COLLEGAMENTO PAGE CONTATTI - MAIL INVIATA
Route::post('/contatti','PageController@contattiSent')->name('contatti.page.sent');

// COLLEGAMENTO PAGE NEWS
Route::get('/news','PageController@news')->name('news.page');

// COLLEGAMENTO PAG DOTTORI PROFILO VISITATORE
Route::get('/doctor','PageController@index')->name('show.doctors');

// COLLEGAMENTO PAG DOTTORI PROMO PROFILO VISITATORE
Route::get('/doctor_promo','PageController@promo')->name('show.doctors.promo');

// COLLEGAMENTO PAG SPECIALIZZAZIONI
Route::get('/specializzazioni','PageController@specializzazioni')->name('specializzazioni.page');

// COLLEGAMENTO PAG ABOUT US
Route::get('/about_us','PageController@aboutUs')->name('about_us');

// COLLEGAMENTO PAG DOTTORI PROFILO VISITATORE
Route::get('/doctor{id}','PageController@showProfile')->name('show.doctor');

// COLLEGAMENTO SEARCH PER CITTA
Route::post('/search','PageController@search')->name('search');

// COLLEGAMENTO INVIO MESSAGGIO VISITATORE
Route::resource('/send_message', 'MexController');

// COLLEGAMENTO INVIO RECENSIONE VISITATORE
Route::resource('/send_review', 'ReviewController');

// COLLEGAMENTO ROTTO USER
Auth::routes();

// COLLEGAMENTO ROTTE USER LOGIN
Route::prefix('user')
    ->namespace('User')
    ->middleware('auth')
    ->group(function () {
        // Rotta home
        Route::get('/', 'HomeController@index')->name('home');
        // Rotta statistiche
        Route::get('/statistiche', 'HomeController@statistiche')->name('statistiche');
        // Rotta profilo
        Route::resource('/profilo', 'UserController');
        // Rotta mex
        Route::resource('/message', 'MessageController');
        // Rotta recensioni
        Route::resource('/review', 'UserReviewController');
        // Rotta promo
        Route::get('/payment/{doctor}', 'PaymentController@request')->name('payment.request');
        Route::post('/payment/{doctor}', 'PaymentController@payment')->name('payment.payment');
        Route::get('/check', 'PaymentController@check')->name('payment.check');
    });
