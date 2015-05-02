<?php

namespace morrisonlevi\Algorithm;


function product($initial = 1) {
    return function($input) use($initial) {
        $product = $initial;
        foreach ($input as $value) {
            $product *= $value;
        }
        return $product;
    };
}

