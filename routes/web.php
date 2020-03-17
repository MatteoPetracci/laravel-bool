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

// Route::get('/', function () {
//    return view('welcome');
// }); 

// Route::get('/', function () {
//    return view('welcome');
// }); 


// Setto la rotta
// Primo argomento è l'url dove l'utende deve andare, come secondo argomento passo il controller e la funzione che mi serve
// con ->name do un nome alla rotta

// Home
Route::get('/', 'StaticPageController@index')->name('static_page.home');

//Student
Route::get('/students', 'StudentController@index')->name('student.home');

// Show di studends
Route::get('students/show/{id}', 'StudentController@show')->name('student.show');

// Dopo aver creato le rotte creo i controller 
