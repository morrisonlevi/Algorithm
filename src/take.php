<?php

namespace morrisonlevi\Algorithm;


function take($n, $input) {
    $i = 0;
    foreach ($input as $key => $value) {
        if ($i++ < $n) {
            yield $key => $value;
        } else {
            break;
        }
    }
}

