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
    return view('RuangDerma',[
      'title' => "Welcome"
    ]);
});

Route::get('/home', function(){
  return view('userpage/home',[
    'title' => "Home"
  ]);
});

Route::get('/details_donasi', function(){
  return view('userpage/detail_donasi',[
    'title' => "Details"
  ]);
});

Route::get('/profile', function(){
  return view('userpage/profile',[
    'title' => "Profile"
  ]);
});

Route::get('/post-donate', function(){
  return view('userpage/post_donate',[
    'title' => "PostDonate"
  ]);
});
