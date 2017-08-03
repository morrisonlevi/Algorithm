<?php

namespace morrisonlevi\Algorithm;


class MapTest extends \PHPUnit\Framework\TestCase {


    function test_empty() {
        $function = function() {
            $this->assertTrue(false);
        };

        $input = [];
        $expect = $input;
        $map = map($function);
        $actual = iterator_to_array($map($input));
        $this->assertEquals($expect, $actual);
    }


    function test_basic() {
        $function = function($value) {
            return $value * 2;
        };

        $input = [1, 2, 3];
        $expect = [2, 4, 6];
        $map = map($function);
        $actual = iterator_to_array($map($input));
        $this->assertEquals($expect, $actual);
    }


}
