<?php

namespace morrisonlevi\Algorithm;


function skip(int $n) {
    return function($input) use($n) {
        $i = 0;
        foreach ($input as $key => $value) {
            if ($i++ < $n) {
                continue;
            }
            yield $key => $value;
        }
    };
}

