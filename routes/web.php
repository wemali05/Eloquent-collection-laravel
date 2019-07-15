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

// Route::get('/', function(){
//     $users = \App\User::all();
//     $chunks = $users->chunk(5);
//     $data = $chunks->toArray();
//     echo '<pre>';
//     print_r($data);
//     echo '<pre>';
// });

Route::get('/', function () {
    $users = \App\User::get();
    $users->gotAllUsers();
});