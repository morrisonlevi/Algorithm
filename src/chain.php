<?php

namespace morrisonlevi\Algorithm;


function chain(callable $fn, callable ...$callables): callable {
    $functions = func_get_args();
    return function(...$params) use($functions) {
        $count = count($functions);
        $carry = $functions[0](...$params);
        for ($i = 1; $i < $count; $i++) {
            $carry = $functions[$i]($carry);
        }
        return $carry;
    };
}

