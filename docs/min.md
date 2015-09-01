# min

Logically `min` takes three parameters: `$minner`, `$initial` and `$input` and
will return the smallest value according to the `$minner`. What actually
happens is that `min` will take one argument (`$minner`) and return a function.
That function will take an `$initial` and return a function. That function will
take the `$input` and return the minimum value according to the `$minner`. The
`$minner` is optional and `$initial` and `$input` are required. If a `$minner`
is not provided then it will default to `\min`.


```php
<?php

use morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$min = Algorithm\min($minner = null)($initial = -1)(range(0,3));

var_dump($min); // int(-1)

```

