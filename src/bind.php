<?php

namespace morrisonlevi\Algorithm;


function bind(callable $fn, ...$args): callable {
    return function(...$params) use($fn, $args) {
        return $fn(...$args, ...$params);
    };
}

