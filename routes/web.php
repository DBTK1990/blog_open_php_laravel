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
|ö
*/

Route::get('/', 'HomeContoller@index');

Route::post('/create', [
    'as' => 'message.create',
    'uses' => 'MessagesController@create'
]);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     echo "hello-world";
// });