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
    return view('layouts.master');
});

Route::get('/pemahaman-html-01', function () {
    return view('html.pemahaman_html_01');
});

Route::get('/pemahaman-html-02', function () {
    return view('html.pemahaman_html_02');
});

Route::get('/pemahaman-js-jquery-01', function () {
    return view('jquery.pemahaman_js_jquery_01');
});

Route::get('/pemahaman-js-jquery-02', function () {
    return view('jquery.pemahaman_js_jquery_02');
});

Route::get('/pemahaman-style-01', function () {
    return view('css.pemahaman_style_01');
});

Route::get('/getInauguratedSchool', 'SchoolController@getInauguratedSchool')->name('getInauguratedSchool-api');


Route::get('/filter', 'SchoolController@index');
Route::post('/filter-post', 'SchoolController@filterpost')->name('filter-post');
