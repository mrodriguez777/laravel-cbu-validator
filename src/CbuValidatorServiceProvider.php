<?php namespace Mrodriguez777\CbuValidator;


use Illuminate\Support\ServiceProvider;


class CbuValidatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('cbu', function ($attribute, $value, $parameter)
        {
            return (new Cbu())->isValid($value);
        });

    }

}
