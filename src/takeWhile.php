<?php

namespace morrisonlevi\Algorithm;


function takeWhile(callable $fn) {
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

