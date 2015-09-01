<?php

namespace morrisonlevi\Algorithm;


function min(callable $minner = null) {
    if ($minner === null) {
        $minner = "min";
    }
    return reduce($minner);
}

