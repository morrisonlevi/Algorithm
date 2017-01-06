<?php

namespace morrisonlevi\Algorithm;


function sum($initial = 0): callable {
    return function(iterable $input) use($initial) {
        $sum = $initial;
        foreach ($input as $value) {
            $sum += $value;
        }
        return $sum;
    };
}

