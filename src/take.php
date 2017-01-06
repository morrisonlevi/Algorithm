<?php

namespace morrisonlevi\Algorithm;


function take(callable $fn): callable {
    return function(iterable $input) use($fn): \Iterator {
        foreach ($input as $key => $value) {
            if (!$fn($value)) {
                break;
            } else {
                yield $key => $value;
            }
        }
    };
}

