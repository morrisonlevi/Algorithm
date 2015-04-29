<?php

namespace morrisonlevi\Algorithm;


function skip($n, $input) {
    $i = 0;
    foreach ($input as $key => $value) {
        if ($i++ < $n) {
            continue;
        }
        yield $key => $value;
    }
}