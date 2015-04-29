<?php

namespace morrisonlevi\Algorithm;


function bind(callable $fn, ...$args) {
    return function(...$params) use($fn, $args) {
        return $fn(...$args, ...$params);
    };
}

