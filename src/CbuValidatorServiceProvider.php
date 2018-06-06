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
            return (new Cbu())->isValid(trim($value));
        });

		$this->app['validator']->extend('cbu_ca', function ($attribute, $value, $parameter)
        {
            $cbu = (new Cbu());

			return $cbu->isValid(trim($value)) && $cbu->checkType(trim($value), 'CA');

        });

		$this->app['validator']->extend('cbu_cc', function ($attribute, $value, $parameter)
        {
            $cbu = (new Cbu());

			return $cbu->isValid(trim($value)) && $cbu->checkType(trim($value), 'CC');

        });

    }

}
