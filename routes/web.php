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

Route::get('/', 'IntroductionController@index');

Route::get('identity', 'IdentityController@index');
Route::post('identity', 'IdentityController@store');

Route::get('date-of-birth', 'DoBController@index');
Route::post('date-of-birth', 'DoBController@store');

Route::get('symptoms', 'CovidSymptomController@index');
Route::post('symptoms', 'CovidSymptomController@store');

Route::get('severity', 'SeverityController@index');
Route::post('severity', 'SeverityController@store');

Route::get('underlying-conditions', 'UnderlyingConditionsController@index');
Route::post('underlying-conditions', 'UnderlyingConditionsController@store');

Route::get('do-you-have-any-dependants', 'HaveDependantsController@index');
Route::post('do-you-have-any-dependants', 'HaveDependantsController@store');

Route::get('public-exposure', 'PublicExposureController@index');
Route::post('public-exposure', 'PublicExposureController@store');

// Dropouts
Route::get('no-symptoms', 'DropOutController@NoSymptoms');
Route::get('self-isolation', 'DropOutController@WeekIsolationAdvice');
Route::get('call-111', 'DropOutController@Call111Advice');
