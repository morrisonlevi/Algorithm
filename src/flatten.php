<?php

namespace morrisonlevi\Algorithm;


function flatten(iterable ... $inputs): \Iterator {
    foreach ($inputs as $xss) {
        foreach ($xss as $xs) {
            foreach ($xs as $k => $x) {
                yield $k => $x;
            }
        }
    }
}

