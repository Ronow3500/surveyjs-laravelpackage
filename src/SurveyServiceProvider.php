<?php
namespace SurveyJs\Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'surveyjs');
    }

    public function register()
    {
        # code...
    }
}