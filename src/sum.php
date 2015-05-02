<?php

namespace morrisonlevi\Algorithm;


function sum($initial = 0) {
    return function($input) use($initial) {
        $sum = $initial;
        foreach ($input as $value) {
            $sum += $value;
        }
        return $sum;
    };
}

