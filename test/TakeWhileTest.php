<?php

namespace morrisonlevi\Algorithm;


class TakeWhileTest extends \PHPUnit_Framework_TestCase {


    function test_takeWhile_none() {
        $takeWhile = takeWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [0,1,2];
        $expect = [];
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_takeWhile_once() {
        $takeWhile = takeWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,2,3];
        $expect = [1];
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


    function test_takeWhile_all() {
        $takeWhile = takeWhile(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,3,5];
        $expect = $input;
        $actual = iterator_to_array($takeWhile($input));

        $this->assertEquals($expect, $actual);
    }


}

