<?php

namespace morrisonlevi\Algorithm;


function min($initial): callable {
    return function(callable $minner = null) use($initial) {
        $r = reduce($initial);
        return $r($minner ?? 'min');
    };
}

