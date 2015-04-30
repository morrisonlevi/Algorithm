<?php

namespace morrisonlevi\Algorithm;


class MapTest extends \PHPUnit_Framework_TestCase {


    function test_empty() {
        $function = function() {
            $this->assertTrue(false);
        };

        $input = [];
        $expect = $input;
        $actual = iterator_to_array(map($function)($input));
        $this->assertEquals($expect, $actual);
    }


    function test_basic() {
        $function = function($value) {
            return $value * 2;
        };

        $input = [1, 2, 3];
        $expect = [2, 4, 6];
        $actual = iterator_to_array(map($function)($input));
        $this->assertEquals($expect, $actual);
    }


}