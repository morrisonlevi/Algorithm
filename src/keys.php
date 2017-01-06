<?php

namespace morrisonlevi\Algorithm;


function keys(iterable $input): \Iterator {
    foreach ($input as $key => $unused) {
        yield $key;
    }
}
