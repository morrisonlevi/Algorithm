<?php

namespace morrisonlevi\Algorithm;


function concat(...$inputs) {
    foreach ($inputs as $values) {
        foreach ($values as $key => $value) {
            yield $key => $value;
        }
    }
}

