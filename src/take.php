<?php

namespace morrisonlevi\Algorithm;


function take(callable $fn) {
    return function($input) use($fn) {
        foreach ($input as $key => $value) {
            if (!$fn($value)) {
                break;
            } else {
                yield $key => $value;
            }
        }
    };
}

