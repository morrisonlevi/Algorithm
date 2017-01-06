<?php

namespace morrisonlevi\Algorithm;


function skip(callable $fn): callable {
    return function(iterable $input) use($fn): \Iterator {
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

