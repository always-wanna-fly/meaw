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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create/ticket','TicketController@create');

Route::post('/create/ticket','TicketController@store');

Route::get('/tickets', 'TicketController@index');


Route::get('/edit/ticket/{id}','TicketController@edit');
Route::patch('/edit/ticket/{id}','TicketController@update');


Route::delete('/delete/ticket/{id}','TicketController@destroy');

Route::get('/tickets/{ticket}', 'TicketController@show');

Route::get('/users', 'HomeController@users');

Route::get('localization/{locale}','LocalizationController@index');

Route::get('/validation','ValidationController@showform');

Route::post('/validation','ValidationController@validateform');

Route::resource('items', 'ItemController');








// Second Route method – Root URL with ID will match this method

Route::get('ID/{id}',function($id){

    echo 'ID: '.$id;

});

// Third Route method – Root URL with or without name will match this method

Route::get('/user/{name?}',function($name = 'Virat Gandhi'){

    echo "Name: ".$name;

});





