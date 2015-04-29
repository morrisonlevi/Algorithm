<?php

namespace morrisonlevi\Algorithm;


function reduce(callable $fn, $initial, $input) {
    $accumulator = $initial;
    foreach ($input as $value) {
        $accumulator = $fn($accumulator, $value);
    }
    return $accumulator;
}

