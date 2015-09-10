<?php

namespace morrisonlevi\Algorithm;


function max($initial) {
    return function(callable $maxer = null) use($initial) {
        if ($maxer === NULL) {
            $maxer = "max";
        }
        $r = reduce($initial);
        return $r($maxer);
    };
}

