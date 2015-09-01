# max

Logically `max` takes three parameters: `$maxer`, `$initial` and `$input` and
will return the largest value according to the `$maxer`. What actually
happens is that `max` will take one argument (`$maxer`) and return a function.
That function will take an `$initial` and return a function. That function will
take the `$input` and return the maximum value according to the `$maxer`. The
`$maxer` is optional and `$initial` and `$input` are required. If a `$maxer`
is not provided then it will default to `\max`.


```php
<?php

use morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$max = Algorithm\max($maxer = null)($initial = -1)(range(0,3));

var_dump($max); // int(-1)

```

