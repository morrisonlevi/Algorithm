<?php

namespace morrisonlevi\Algorithm;


class SkipWhileTest extends \PHPUnit_Framework_TestCase {


    function test_skipWhile_none() {
        $skipWhile = skipWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [0,2,3];
        $expect = $input;
        $actual = iterator_to_array($skipWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_skipWhile_one() {
        $skipWhile = skipWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,2,3];
        $expect = [1 => 2, 2 => 3];
        $actual = iterator_to_array($skipWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_skipWhile_all() {
        $skipWhile = skipWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,3,5];
        $expect = [];
        $actual = iterator_to_array($skipWhile($input));

        $this->assertEquals($expect, $actual);
    }


}

