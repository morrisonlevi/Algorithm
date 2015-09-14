<?php

namespace morrisonlevi\Algorithm;


function keys($input) {
    foreach ($input as $key => $unused) {
        yield $key;
    }
}
