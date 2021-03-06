<?php

namespace morrisonlevi\Algorithm;

class KeysTest extends \PHPUnit\Framework\TestCase {
    function test() {
        $input = [
            3 => 1,
            1 => 3,
            2 => 2,
        ];
        $expect = [3,1,2];
        $actual = iterator_to_array(keys($input), false);

        $this->assertEquals($expect, $actual);
    }
}