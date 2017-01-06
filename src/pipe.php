<?php

namespace morrisonlevi\Algorithm;


function pipe($param, callable ...$callables) {
    $carry = $param;
    foreach ($callables as $callable) {
        $carry = $callable($carry);
    }
    return $carry;
}

