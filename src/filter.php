<?php

namespace morrisonlevi\Algorithm;


function filter(callable $fn) {
    return function($input) use ($fn) {
        foreach ($input as $key => $value) {
            if ($fn($value)) {
                yield $key => $value;
            }
        }
    };
}

