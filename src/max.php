<?php

namespace morrisonlevi\Algorithm;


function max($initial) {
    return function(callable $maxer = null) use($initial) {
        if ($maxer === NULL) {
            $maxer = "max";
        }
        return function($input) use($initial, $maxer) {
            $max = $initial;
            foreach ($input as $value) {
                $max = $maxer($max, $value);
            }
            return $max;
        };
    };
}

