<?php

namespace morrisonlevi\Algorithm;


function skipWhile(callable $fn) {
    return function($input) use($fn) {
        $skipping = true;
        foreach ($input as $key => $value) {
            if ($skipping) {
                if ($fn($value)) {
                    continue;
                }
                $skipping = false;
            }
            yield $key => $value;
        }
    };
}

