<?php

namespace morrisonlevi\Algorithm;


function skipN(int $n): callable {
    return function(iterable $input) use($n): \Iterator {
        $skipped = 0;
        foreach ($input as $key => $value) {
            if ($skipped++ < $n) {
                continue;
            }
            yield $key => $value;
        }
    };
}
