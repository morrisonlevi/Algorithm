# max

Logically `max` takes three parameters: `$comparator`, `$initial` and `$input`.
The `$comparator` is optional and `$initial` and `$input` are required. If a
`$comparator` is not provided then it will default to `\max`.


```php
<?php

use morrisonlevi\Algorithm;

require __DIR__ . '/load.php';

$max = Algorithm\max($comparator = null)($initial = -1)(range(0,3));

var_dump($max); // int(3)

```

