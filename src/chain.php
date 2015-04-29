<?php

namespace morrisonlevi\Algorithm;


function chain(callable $fn, callable ...$callables) {
    $functions = array_reverse(func_get_args());
    return compose(...$functions);
}

