<?php

namespace morrisonlevi\Algorithm;


function compose(callable $f, callable ...$callables) {
    $functions = func_get_args();
    return function(...$params) use($functions) {
        $f = array_pop($functions);
        $carry = $f(...$params);
        while (!empty($functions)) {
            $f = array_pop($functions);
            $carry = $f($carry);
        }   
        return $carry;
    };
}

