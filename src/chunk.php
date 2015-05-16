<?php

namespace morrisonlevi\Algorithm;


function chunk($chunk_size) {
    assert($chunk_size >= 1);
    return function($input) use($chunk_size) {
        $chunk = [];
        foreach ($input as $value) {
            if (count($chunk) < $chunk_size) {
                $chunk[] = $value;
            } else {
                yield $chunk;
                $chunk = [$value];
            }
        }
        if (!empty($chunk)) {
            yield $chunk;
        }
    };
}

