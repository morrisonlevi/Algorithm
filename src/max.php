<?php

namespace morrisonlevi\Algorithm;


function max(callable $comparator = null) {
    if ($comparator === null) {
        $comparator = "max";
    }
    return reduce($comparator);
}

