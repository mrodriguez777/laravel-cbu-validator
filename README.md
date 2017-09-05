# Laravel Cbu Validator
CBU Validator for Laravel 5

## Install

Via Composer

``` bash
$ composer require mrodriguez777/laravel-cbu-validator
```

Set providers in app/config.php
``` php
'providers' => [
    Mrodriguez777\CbuValidator\CbuValidatorServiceProvider::class,
]
```

Lastly, create the validation messages for the new rules by adding the following lines to resources/lang/en/validation.php
``` php
'cbu' => 'The :attribute format is invalid.',
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

© 2017 [Martin Maximiliano Rodriguez]
