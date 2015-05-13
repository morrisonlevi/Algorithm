<?php

namespace morrisonlevi\Algorithm;


function take($n) {
    return function($input) use($n) {
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
