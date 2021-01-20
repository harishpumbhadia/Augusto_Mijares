<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('team', function () {
    return view('team');
});
Route::get('addteam', function () {
    return view('addteam');
});
Route::get('editteam', function () {
    return view('editteam');
});
Route::get('deleteteam', function () {
    return view('deleteteam');
});
Route::get('/', function () {
    return view('login');
});
Route::get('index', function () {
    return view('index');
});
Route::get('inicio', 'SiteController@inicio');

Route::get('semblanza','SiteController@semblanza');
Route::get('centroaugustomijares','SiteController@centroaugusto');
Route::get('proyectos', 'SiteController@proyectos');
Route::get('eventos', 'SiteController@eventos');
Route::get('videos', 'SiteController@videos');
Route::get('equipo','SiteController@equipos');

Route::get('registro', function () {
    return view('registro')->with(['errors'=>[]]);
});

Route::get('addproject', function () {
    return view('addproject')->with(['errors'=>[]]);
});
Route::get('addevent', function () {
    return view('addevent')->with(['errors'=>[]]);
});
Route::get('login', function () {
    return view('login')->with(['errors'=>[]]);
});

Route::get('editevent', function () {
    return view('editevent')->with(['errors'=>[]]);
});
Route::get('editproject', function () {
    return view('editproject')->with(['errors'=>[]]);
});
Route::get('deleteevent', function () {
    return view('deletevent')->with(['errors'=>[]]);
});
Route::get('deleteproject', function () {
    return view('deleteproject')->with(['errors'=>[]]);
});
Route::get('logout','SiteController@logout');
Route::post('editeventdata','SiteController@editEventdata');
Route::post('editprojectdata','SiteController@editProjectdata');
Route::post('editTeamdata','SiteController@editTeamdata');

Route::post('deleteeventdata','SiteController@deleteEventdata');
Route::post('deleteprojectdata','SiteController@deleteProjectdata');
Route::post('deleteteamdata','SiteController@deleteTeamdata');

Route::post('addeventdata','SiteController@addEventdata');
Route::post('addTeamdata','SiteController@addTeamdata');
Route::post('addpojectdata','SiteController@addPojectdata');
Route::post('register','SiteController@register');
Route::post('logindata','SiteController@logindata');
Route::get('projects','SiteController@projects');
Route::get('events','SiteController@events');
Route::get('teams','SiteController@teams');
//Route::get('login','SiteController@loginpage');

