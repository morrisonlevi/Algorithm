<?php

namespace morrisonlevi\Algorithm;


function min($initial) {
    return function(callable $minner = null) use($initial) {
        if ($minner === NULL) {
            $minner = "min";
        }
        return function($input) use($initial, $minner) {
            $min = $initial;
            foreach ($input as $value) {
                $min = $minner($min, $value);
            }
            return $min;
        };
    };
}

