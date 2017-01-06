<?php

namespace morrisonlevi\Algorithm;


class TakeTest extends \PHPUnit_Framework_TestCase {


    function test_take_none() {
        $take = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [0,1,2];
        $expect = [];
        $actual = iterator_to_array($take($input));

        self::assertEquals($expect, $actual);
    }


    function test_take_once() {
        $take = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,2,3];
        $expect = [1];
        $actual = iterator_to_array($take($input));

        self::assertEquals($expect, $actual);
    }


    function test_take_all() {
        $take = take(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,3,5];
        $expect = $input;
        $actual = iterator_to_array($take($input));

        self::assertEquals($expect, $actual);
    }


}

