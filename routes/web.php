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
//Route=show data 
//view=show user

Route::get('/','PageController@homefun')->name('home');       //view(page name)
    

//Data show Page

Route::get('about','PageController@aboutfun')->name('aboutname');    //view(page name)


Route::get('contact','PageController@contactfun')->name('contactname');           //view(page name)

Route::get('simplepost','PageController@simplepostfun')->name('simplepostname'); 
