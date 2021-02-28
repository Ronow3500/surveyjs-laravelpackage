<?php

namespace SurveyJs\Survey\Http\Controllers;

use App\Http\Controllers\Controller;

class SurveyJsController extends Controller
{
    public function index()
    {
        return view('surveyjs::surveyjs');
    }
}