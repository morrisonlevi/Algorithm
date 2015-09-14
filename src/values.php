<?php

namespace morrisonlevi\Algorithm;


function values($input) {
    foreach ($input as $value) {
        yield $value;
    }
}