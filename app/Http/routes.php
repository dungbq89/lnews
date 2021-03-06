<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', array('as' => 'homepage', 'uses' => 'HomeController@home'));
Route::get('/404-not-found', array('as' => 'error404', function() {
  return View::make('frontend.default.error404');
}));

// Contact 
Route::get('/contact', array('as' => 'contact', 'uses' => 'ContactController@index'));
Route::post('/contact-post', array('as' => 'contact_post', 'before' => 'csrf', 'uses' => 'ContactController@store'));

// Article Detail
Route::get('/chi-tiet-tin-tuc/{code}', array(
        'as' => 'article.detail',
        'uses'=> 'ArticleController@detail'
    ));

//chi tiet chuyen muc
Route::get('/category/{code}', array('as' => 'category', 'uses' => 'CategoryController@index'));


