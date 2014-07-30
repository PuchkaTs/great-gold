<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'   => 'home', 'uses' => 'PagesController@home']);
Route::get('/about_us',function(){
    return View::make('pages.about_us');
});
Route::get('/news',function(){
    return View::make('pages.news');
});
Route::get('/services',function(){
    return View::make('pages.services');
});
Route::get('/projects',function(){
    return View::make('pages.projects');
});
Route::get('/career',function(){
    return View::make('pages.career');
});
Route::get('/contact_us',function(){
    return View::make('pages.contact_us');
});