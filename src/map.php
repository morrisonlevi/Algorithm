<?php

namespace morrisonlevi\Algorithm;


function map(callable $fn, $input) {
    foreach ($input as $key => $value) {
        yield $key => $fn($value);
    }
}

