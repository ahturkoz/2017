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

Route::get('/', 'HomeController@getCustomerDashboard');

Auth::routes();


Route::post('/session/get', 'HomeController@checkSession');
Route::post('/session/logout', 'HomeController@logoutUser');

Route::get('/projects/visits/content', 'HomeController@getVisits');
Route::get('/dashboard/content', 'HomeController@getDashboard');
Route::get('/projects/content', 'HomeController@getProjects');
Route::post('/projects/statistics/content', 'HomeController@getProjectStatistics');
Route::post('/projects/docs/content', 'HomeController@getProjectDocs');


Route::post('/users/register', 'HomeController@registerUser');
Route::post('/users/login', 'HomeController@loginUser');
Route::post('/users/profile/content', 'HomeController@getProfileContent');
Route::post('/projects/visits/rate', 'HomeController@rateVisit');
Route::post('/projects/detail/content', 'HomeController@getProjectDetail');
Route::post('/users/pinRequest', 'HomeController@requestPin');
Route::post('/users/pinPost', 'HomeController@postPin');
