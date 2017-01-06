<?php

namespace morrisonlevi\Algorithm;


function max($initial): callable {
    return function(callable $maxer = null) use($initial) {
        $r = reduce($initial);
        return $r($maxer ?? 'max');
    };
}

