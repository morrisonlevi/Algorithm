<?php

namespace morrisonlevi\Algorithm;


function chunk(int $chunk_size): callable {
    assert($chunk_size >= 1);
    return function(iterable $input) use($chunk_size): \Iterator {
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

