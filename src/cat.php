<?php

namespace morrisonlevi\Algorithm;


function cat($input, ...$others) {
    foreach ($input as $key => $value) {
        yield $key => $value;
    }
    foreach ($others as $values) {
        foreach ($values as $key => $value) {
            yield $key => $value;
        }
    }
}

