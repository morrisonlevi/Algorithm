<?php

namespace morrisonlevi\Algorithm;


class SkipTest extends \PHPUnit_Framework_TestCase {


    function test_skip_zero() {
        $input = [0, 1, 2];
        $expect = $input;
        $skip = skip(0);
        $actual = iterator_to_array($skip($input));
        $this->assertEquals($expect, $actual);
    }


    function test_skip_one() {
        $input = [0, 1, 2];
        $expect = [1 => 1, 2 => 2];
        $skip = skip(1);
        $actual = iterator_to_array($skip($input));
        $this->assertEquals($expect, $actual);
    }


}
