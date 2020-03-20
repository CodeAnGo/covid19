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
Route::get('/introduction', 'IntroductionController@index');

// NHS Patient ID

Route::get('do-you-know-your-nhs-patient-number', 'IdentityController@DoYouKnowYourNHSPatientNumberIndex');
Route::post('do-you-know-your-nhs-patient-number', 'IdentityController@DoYouKnowYourNHSPatientNumberStore');

Route::get('identity', 'IdentityController@index');
Route::post('identity', 'IdentityController@store');


// Patient Details

Route::get('date-of-birth', 'DoBController@index');
Route::post('date-of-birth', 'DoBController@store');

Route::get('what-is-your-phone-number', 'DoBController@PhoneNumberIndex');
Route::post('what-is-your-phone-number', 'DoBController@PhoneNumberStore');

Route::get('what-is-your-post-code', 'DoBController@PostCodeIndex');
Route::post('what-is-your-post-code', 'DoBController@PostCodeStore');

Route::get('what-was-your-sex-at-birth', 'DoBController@SexAtBirthIndex');
Route::post('what-was-your-sex-at-birth', 'DoBController@SexAtBirthStore');


// Exisiting Test Results

Route::get('have-you-already-been-tested-for-coronavirus', 'ExistingTestResultsController@HaveYouAlreadyBeenTestedForCoronavirusIndex');
Route::post('have-you-already-been-tested-for-coronavirus', 'ExistingTestResultsController@HaveYouAlreadyBeenTestedForCoronavirusStore');

Route::get('date-of-last-test', 'ExistingTestResultsController@WhatWasTheDateOfLastTestIndex');
Route::post('date-of-last-test', 'ExistingTestResultsController@WhatWasTheDateOfLastTestStore');

Route::get('have-you-been-tested-more-than-once', 'ExistingTestResultsController@HaveYouBeenTestedMoreThanOnceIndex');
Route::post('have-you-been-tested-more-than-once', 'ExistingTestResultsController@HaveYouBeenTestedMoreThanOnceStore');

Route::get('has-your-condition-worsened-since-your-last-test', 'ExistingTestResultsController@HasYourConditionWorsenedSinceYourLastTestIndex');
Route::post('has-your-condition-worsened-since-your-last-test', 'ExistingTestResultsController@HasYourConditionWorsenedSinceYourLastTestStore');


// Symptoms

Route::get('symptoms', 'CovidSymptomController@index');
Route::post('symptoms', 'CovidSymptomController@store');

Route::get('severity', 'SeverityController@index');
Route::post('severity', 'SeverityController@store');


// Serious Conditions

Route::get('underlying-conditions', 'UnderlyingConditionsController@index');
Route::post('underlying-conditions', 'UnderlyingConditionsController@store');


// Work

Route::get('do-you-work-away-from-your-home', 'WorkController@DoYouWorkAwayFromYourHomeIndex');
Route::post('do-you-work-away-from-your-home', 'WorkController@DoYouWorkAwayFromYourHomeStore');

Route::get('what-is-the-post-code-of-your-workplace', 'WorkController@WhatIsThePostCodeOfYourWorkplaceIndex');
Route::post('what-is-the-post-code-of-your-workplace', 'WorkController@WhatIsThePostCodeOfYourWorkplaceStore');

Route::get('when-did-you-last-visit', 'WorkController@WhenDidYouLastVisitIndex');
Route::post('when-did-you-last-visit', 'WorkController@WhenDidYouLastVisitStore');

Route::get('are-you-a-critical-worker', 'WorkController@AreYouACriticalWorkerIndex');
Route::post('are-you-a-critical-worker', 'WorkController@AreYouACriticalWorkerStore');

Route::get('do-you-work-with-at-risk-groups', 'WorkController@DoYouWorkWithAtRiskGroupsIndex');
Route::post('do-you-work-with-at-risk-groups', 'WorkController@DoYouWorkWithAtRiskGroupsStore');


// Self Isolation

Route::get('are-you-self-isolating', 'SelfIsolationController@AreYouSelfIsolatingIndex');
Route::post('are-you-self-isolating', 'SelfIsolationController@AreYouSelfIsolatingStore');

Route::get('where-are-you-self-isolating', 'SelfIsolationController@WhereAreYouSelfIsolatingIndex');
Route::post('where-are-you-self-isolating', 'SelfIsolationController@WhereAreYouSelfIsolatingStore');


// Medical Dependency

Route::get('do-you-depend-on-medical-assistance', 'MedicalDependencyController@DoYouDependOnMedicalAssistanceIndex');
Route::post('do-you-depend-on-medical-assistance', 'MedicalDependencyController@DoYouDependOnMedicalAssistanceStore');

Route::get('do-you-have-enough-medication', 'MedicalDependencyController@DoYouHaveEnoughMedicationIndex');
Route::post('do-you-have-enough-medication', 'MedicalDependencyController@DoYouHaveEnoughMedicationStore');


// Misc

Route::get('do-you-have-any-dependants', 'HaveDependantsController@index');
Route::post('do-you-have-any-dependants', 'HaveDependantsController@store');

Route::get('public-exposure', 'PublicExposureController@index');
Route::post('public-exposure', 'PublicExposureController@store');



// Dropouts
Route::get('no-symptoms', 'DropOutController@NoSymptoms');
Route::get('self-isolation', 'DropOutController@WeekIsolationAdvice');
Route::get('call-111', 'DropOutController@Call111Advice');
