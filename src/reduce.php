<?php

namespace morrisonlevi\Algorithm;


function reduce(callable $fn) {
    return function($initial) use ($fn) {
        return function ($input) use ($fn, $initial) {
            $accumulator = $initial;
            foreach ($input as $value) {
                $accumulator = $fn($accumulator, $value);
            }
            return $accumulator;
        };
    };
}

