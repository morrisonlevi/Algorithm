<?php

namespace morrisonlevi\Algorithm;


function concat($input, ...$others) {
    foreach ($input as $key => $value) {
        yield $key => $value;
    }
    foreach ($others as $values) {
        foreach ($values as $key => $value) {
            yield $key => $value;
        }
    }
}

