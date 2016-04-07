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

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', 'NotesController@index');

Route::post('notes', 'NotesController@store');
Route::get('note/create', 'NotesController@create');

Route::get('notes/{note}', 'NotesController@show')->where('note', '[0-9]+');

// Restringir nota en la ruta a solo numeros
// slug es un parametro opcional
// Route::get('notes/{note}/{slug?}', function ($note, $slug = null) {
//     dd($note, $slug);
// })->where('note', '[0-9]+');
