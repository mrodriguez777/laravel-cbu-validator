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
        /**
         * Extend the Laravel Validator with the "identity_number" rule
         */
        $this->app['validator']->extend('cbu', function ($attribute, $value, $parameter)
        {
            return CBU::isValid($value);
        });

    }

}
