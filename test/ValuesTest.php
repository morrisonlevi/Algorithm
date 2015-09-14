<?php

namespace morrisonlevi\Algorithm;

class ValuesTest extends \PHPUnit_Framework_TestCase {
    function test() {
        $input = [
            3 => 1,
            1 => 3,
            2 => 2,
        ];
        $expect = [1,3,2];
        $actual = iterator_to_array(values($input), false);

        $this->assertEquals($expect, $actual);
    }
}