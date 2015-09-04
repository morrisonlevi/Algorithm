<?php

namespace morrisonlevi\Algorithm;


function reduce($initial) {
    return function(callable $fn) use ($initial) {
        return function ($input) use ($initial, $fn) {
            $accumulator = $initial;
            foreach ($input as $value) {
                $accumulator = $fn($accumulator, $value);
            }
            return $accumulator;
        };
    };
}

