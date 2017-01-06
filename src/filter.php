<?php

namespace morrisonlevi\Algorithm;


function filter(callable $fn): callable {
    return function(iterable $input) use ($fn): \Iterator {
        foreach ($input as $key => $value) {
            if ($fn($value)) {
                yield $key => $value;
            }
        }
    };
}

