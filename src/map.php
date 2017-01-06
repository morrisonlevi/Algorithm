<?php

namespace morrisonlevi\Algorithm;


function map(callable $fn): callable {
    return function (iterable $input) use ($fn) : \Iterator {
        foreach ($input as $key => $value) {
            yield $key => $fn($value);
        }
    };
}

