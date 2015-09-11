<?php

namespace morrisonlevi\Algorithm;


function skipN($n) {
    return function($input) use($n) {
        $skipped = 0;
        foreach ($input as $key => $value) {
            if ($skipped++ < $n) {
                continue;
            }
            yield $key => $value;
        }
    };
}
