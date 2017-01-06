<?php

namespace morrisonlevi\Algorithm;


function concat(iterable ... $inputs): \Iterator {
    foreach ($inputs as $values) {
        foreach ($values as $key => $value) {
            yield $key => $value;
        }
    }
}

