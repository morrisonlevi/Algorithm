<?php

namespace morrisonlevi\Algorithm;


function filter(callable $fn, $input) {
    foreach ($input as $key => $value) {
        if ($fn($value)) {
            yield $key => $value;
        }
    }
}

