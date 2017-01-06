<?php

namespace morrisonlevi\Algorithm;


function values(iterable $input): \Iterator {
    foreach ($input as $value) {
        yield $value;
    }
}

