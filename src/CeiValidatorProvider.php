<?php

namespace Crawly\CeiLaravel;

use Illuminate\Support\ServiceProvider;

class CeiValidatorProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('cei', '\\Crawly\\CeiLaravel\\Validator@validateCei', 'O campo :attribute deve ser um cei válido.');
    }
}
