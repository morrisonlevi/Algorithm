<?php

namespace morrisonlevi\Algorithm;


function reduce($initial): callable {
    return function(callable $fn) use ($initial): callable {
        return function (iterable $input) use ($initial, $fn) {
            $accumulator = $initial;
            foreach ($input as $value) {
                $accumulator = $fn($accumulator, $value);
            }
            return $accumulator;
        };
    };
}

