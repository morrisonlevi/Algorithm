<?php

namespace morrisonlevi\Algorithm;


function max(callable $maxer = null) {
    if ($maxer === null) {
        $maxer = "max";
    }
    return reduce($maxer);
}

