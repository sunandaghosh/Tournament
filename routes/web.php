<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
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
//     return view('welcome');
// });

Route::get('/tournament/create', 'App\Http\Controllers\TournamentController@create');
Route::post('/tournament/store', 'TournamentController@store');
Route::get('/tournament/{tournament}/events', 'EventController@index');
Route::get('/tournament/{tournament}/events/{event}', 'EventController@show');

