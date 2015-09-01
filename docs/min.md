# min

Logically `min` takes three parameters: `$comparator`, `$initial` and `$input`.
The `$comparator` is optional and `$initial` and `$input` are required. If a
`$comparator` is not provided then it will default to `\min`.


```php
<?php

use morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$min = Algorithm\min($comparator = null)($initial = -1)(range(0,3));

var_dump($min); // int(-1)

```

