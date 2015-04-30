<?php

namespace morrisonlevi\Algorithm;


function indexBy(callable $fn) {
    return function($input) use($fn) {
        foreach ($input as $value) {
            yield $fn($value) => $value;
        }
    };
}

