<?php

namespace morrisonlevi\Algorithm;


function flatten(...$inputs) {
    foreach ($inputs as $xss) {
        foreach ($xss as $xs) {
            foreach ($xs as $k => $x) {
                yield $k => $x;
            }
        }
    }
}

