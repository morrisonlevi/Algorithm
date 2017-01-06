<?php

namespace morrisonlevi\Algorithm;


function indexBy(callable $fn): callable {
    return function(iterable $input) use($fn): \Iterator {
        foreach ($input as $value) {
            yield $fn($value) => $value;
        }
    };
}

