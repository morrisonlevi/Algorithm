<?php

namespace morrisonlevi\Algorithm;


class TakeTest extends \PHPUnit_Framework_TestCase {


    function test_takeWhile_none() {
        $takeWhile = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [0,1,2];
        $expect = [];
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_takeWhile_once() {
        $takeWhile = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,2,3];
        $expect = [1];
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_takeWhile_all() {
        $takeWhile = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,3,5];
        $expect = $input;
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


}

