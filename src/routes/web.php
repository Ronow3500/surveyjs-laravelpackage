<?php

Route::group(['namespace'=>'SurveyJs\Survey\Http\Controllers'], function ()
{
    Route::get('surveyjs', 'SurveyJsController@index'); 
});