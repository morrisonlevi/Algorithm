<?php

namespace morrisonlevi\Algorithm;


function min(callable $comparator = null) {
    if ($comparator === null) {
        $comparator = "min";
    }
    return reduce($comparator);
}

