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

		$this->app['validator']->extend('cbu_ca', function ($attribute, $value, $parameter)
        {
            $cbu = (new Cbu());

			return $cbu->isValid($value) && $cbu->checkType($value, 'CA');

        });

		$this->app['validator']->extend('cbu_cc', function ($attribute, $value, $parameter)
        {
            $cbu = (new Cbu());

			return $cbu->isValid($value) && $cbu->checkType($value, 'CC');

        });

    }

}
