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

Route::get('/', 'pagesController@getIndex');

Route::get('/about','pagesController@getAbout');

Route::get('/contact','pagesController@getContact');


Route::get('/Ellamount','pagesController@getEllamount');
Route::resource('Contact','ContactFormController');

Route::get('/Shangrilla','pagesController@getShangrilla');

Route::get('/Araliya','pagesController@getAraliya');

Route::get('/Jetwing','pagesController@getJetwing');

Route::get('/Tajsouth','pagesController@getTajsouth');

Route::get('/wilde','pagesController@getwilde');

Route::get('/Deersabra','pagesController@getDeersabra');

Route::get('/mahora','pagesController@getmahora');

Route::get('/Lagoon','pagesController@getLagoon');

Route::get('/facility','pagesController@getFacility');

Route::post('/saveTask','TaskController@store');
