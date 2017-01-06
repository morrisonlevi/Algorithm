<?php

namespace morrisonlevi\Algorithm;


function product($initial = 1): callable {
    return function(iterable $input) use($initial) {
        $product = $initial;
        foreach ($input as $value) {
            $product *= $value;
        }
        return $product;
    };
}

