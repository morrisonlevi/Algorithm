<?php

namespace morrisonlevi\Algorithm;


function take(int $n) {
    return function($input) use($n) {
        $i = 0;
        foreach ($input as $key => $value) {
            if ($i++ < $n) {
                yield $key => $value;
            } else {
                break;
            }
        }
    };
}

