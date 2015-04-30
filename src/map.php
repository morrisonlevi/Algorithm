<?php

namespace morrisonlevi\Algorithm;


function map(callable $fn) {
    return function ($input) use ($fn) {
        foreach ($input as $key => $value) {
            yield $key => $fn($value);
        }
    };
}

