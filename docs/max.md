# max

Logically `max` takes three parameters: `$comparator`, `$initial` and `$input`
and will return the largest value according to the `$comparator`. What
actually happens is that `max` will take one argument (`$comparator`) and
return a function. That function will take an `$initial` and return a function.
That function will take the `$input` and return the maximum value according to
the `$comparator`.
The `$comparator` is optional and `$initial` and `$input` are required. If a
`$comparator` is not provided then it will default to `\max`.


```php
<?php

use morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$max = Algorithm\max($comparator = null)($initial = -1)(range(0,3));

var_dump($max); // int(-1)

```

