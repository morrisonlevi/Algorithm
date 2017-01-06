<?php

namespace morrisonlevi\Algorithm;


function takeN(int $n): callable {
    return function(iterable $input) use($n): \Iterator {
        $taken = 0;
        foreach ($input as $key => $value) {
            if ($taken++ < $n) {
                yield $key => $value;
            } else {
                break;
            }
        }
    };
}
