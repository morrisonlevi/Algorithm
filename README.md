# Basic Algorithms for PHP

[![Code Climate](https://codeclimate.com/github/morrisonlevi/Algorithm/badges/gpa.svg)](https://codeclimate.com/github/morrisonlevi/Algorithm) [![Test Coverage](https://codeclimate.com/github/morrisonlevi/Algorithm/badges/coverage.svg)](https://codeclimate.com/github/morrisonlevi/Algorithm/coverage)

PHP's built-in functions such as `array_map`, `array_filter` and `array_reduce` have a few issues:

  - They only work with arrays
  - They are eager instead of lazy
  - They are cumbersome to compose

This repository provides definitions for common algorithms such as `map`, `filter`, and `reduce` with certain characteristics:

  - They work with any type that can be used in a foreach loop
  - They are lazy
  - They are not (too) cumbersome to compose

## Building

PHP does not have function autoloading at the time of this writing. Since this project is mostly functions it uses a makefile to build `load.php` which will include all of the functions for use. You can also build a phar or run the unit tests:

  - `make` (or `make load.php`): builds `load.php`
  - `make phar`: builds `morrisonlevi_algorithm.phar`
  - `make check`: runs the phpunit test suite

There is a script registered in the `composer.json` that will build `load.php` if the composer autoloader gets built.

## Examples

This example does a basic `map`. Note that the function that does the mapping comes first and the input data comes second:
```php
<?php

namespace morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$mul2 = function ($value) {
    return $value * 2;
};

$result = map($mul2)([1,2,3]);

var_export(iterator_to_array($result));
/*
array (
  0 => 2,
  1 => 4,
  2 => 6,
)
*/
```

This example chains a `filter`, `map` and `sum` together:

```php
<?php

namespace morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$odd = function($value) {
   return $value % 2 > 0;
};

$mul2 = function($value) {
    return $value * 2;
};

$algorithm = chain(
    filter($odd),
    map($mul2),
    sum()
);

var_dump($algorithm([1,2,3])); // int(8)
```

