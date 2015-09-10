<?php

namespace morrisonlevi\Algorithm;


function min($initial) {
    return function(callable $minner = null) use($initial) {
        if ($minner === NULL) {
            $minner = "min";
        }
        $r = reduce($initial);
        return $r($minner);
    };
}

