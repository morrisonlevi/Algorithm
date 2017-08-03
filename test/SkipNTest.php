<?php

namespace morrisonlevi\Algorithm;


class SkipNTest extends \PHPUnit\Framework\TestCase {


    function test_skip_zero() {
        $input = [0, 1, 2];
        $expect = $input;
        $skip = skipN(0);
        $actual = iterator_to_array($skip($input));
        $this->assertEquals($expect, $actual);
    }


    function test_skip_one() {
        $input = [0, 1, 2];
        $expect = [1 => 1, 2 => 2];
        $skip = skipN(1);
        $actual = iterator_to_array($skip($input));
        $this->assertEquals($expect, $actual);
    }


}
