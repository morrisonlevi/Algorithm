<?php

namespace morrisonlevi\Algorithm;


class ReduceTest extends \PHPUnit_Framework_TestCase {


    function test_reduce_none_returns_initial() {
        $input = [];
        $initial = 0;
        $expect = $initial;
        $actual = reduce(function($a, $b) {
            return $a + $b;
        }, $initial, $input);
        $this->assertEquals($expect, $actual);
    }

    function test_reduce_basic() {
        $input = [1, 2, 3];
        $initial = 0;
        $expect = 6;
        $reducing_function = function($a, $b) {
            return $a + $b;
        };
        $actual = reduce($reducing_function, $initial, $input);
        $this->assertEquals($expect, $actual);
    }
}