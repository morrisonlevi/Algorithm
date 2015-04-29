# Basic Algorithms for PHP

PHP's built-in functions such as `array_map`, `array_filter` and `array_reduce` have a few issues:

  - They only work with arrays
  - They are eager instead of lazy
  - They are cumbersome to compose

This repository provides definitions for common algorithms such as `map`, `filter`, and `reduce` with certain characteristics:

  - They work with any type that can be used in a foreach loop
  - They are lazy
  - They are not (too) combersome to compose

##Examples

This example does a basic `map`. Note that the function that does the mapping comes first and the input data comes second:
```php
<?php

namespace morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$mul2 = function ($value) {
    return $value * 2;
};

$result = map($mul2, [1,2,3]);

var_export(iterator_to_array($result));
/*
array (
  0 => 2,
  1 => 4,
  2 => 6,
)
*/
```

This example chains a `filter`, `map` and `reduce` together:

```php
<?php

namespace morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

// this function is just here to help with writing the fully qualified names
// of the algorithms
function fqn($base) {
    return function($identifier) use ($base) {
        return "$base\\$identifier";
    };
}
$fqn = fqn(__NAMESPACE__);


$algorithm = chain(
    bind($fqn('filter'), function($value) {
        return $value % 2 > 0;
    }),
    bind($fqn('map'), function($value) {
        return $value * 2;
    }),
    bind($fqn('reduce'), function($accumulator, $value) {
        return $accumulator + $value;
    }, 0)
);

var_dump($algorithm([1,2,3])); // int(8)
```

