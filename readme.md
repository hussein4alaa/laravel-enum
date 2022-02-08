# Laravel Enum


This package offers strongly typed enums in PHP.
In this package we will change the value coming from the database and entered into it

## Installation

Via Composer

``` bash
composer require g4t/enum
```

``` bash
php artisan vendor:publish --provider=g4t\Enum\EnumServiceProvider
```

## Usage

use the following code in model

``` 
use g4t\Enum\Status;
.
.
.

protected $casts = [
  'column_name' => Status::class,
];

```

now go to `config/enum.php` you well find this example there:

##### In the following code, the key is the value allowed in the database
##### and value is the format to be output instead of the one in the database
```
<?php

return [
    '1' => 'active',
    '2' => 'inactive'
];
```

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/g4t/enum.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/g4t/enum.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/g4t/enum/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/g4t/enum
[link-downloads]: https://packagist.org/packages/g4t/enum
[link-travis]: https://travis-ci.org/g4t/enum
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/g4t
[link-contributors]: ../../contributors
