<?php

namespace morrisonlevi\Algorithm;


function compose(callable $fn, callable ...$callables) {
    $functions = func_get_args();
    return function(...$params) use($functions) {
        $i = count($functions) - 1;
        $carry = $functions[$i](...$params);
        for ($i--; $i >= 0; $i--) {
            $carry = $functions[$i]($carry);
        }
        return $carry;
    };
}

