<?php

namespace morrisonlevi\Algorithm;


function mapcat(callable $fn) {
    // This could be implemented in one line:
    // return concat(map($fn));
    // However, I opted to not do this since both map and cat have properties
    // that aren't needed for this specific application and I prefer to use
    // as few inter-dependencies as possible
    return function ($input) use($fn) {
        foreach ($input as $values) {
            foreach ($fn($values) as $key => $value) {
                yield $key => $value;
            }
        }
    };
}

