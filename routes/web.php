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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata', function () {
    return view('biodata');
});


Route::resource('hero','HeroController');

Route::get('biodata/{nama}/{umur}',function($nama,$umur){
  echo'<h1>Nama Saya: '.$nama.'</h1>';
  echo'<br>';
  echo'<h1>Umur: '.$umur.'</h1>';
});

Route::get('biodata/db',function(){
    $user = DB::table('users')->find(1);
    $user = DB::table('users')->where('id',1)->first();
      echo'<h1>Nama Saya: '.$user->name.'</h1>';
});



Route::get('/marvel', function () {
    return view('marvel.index');
});
Route::get('/marvel/create', function () {
    return view('marvel.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
