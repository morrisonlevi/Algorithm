<?php

namespace morrisonlevi\Algorithm;


class TakeTest extends \PHPUnit_Framework_TestCase {


    function test_take_zero() {
        $n = 0;
        $input = [1,2,3];
        $expect = [];
        $actual = iterator_to_array(take($n, $input));

        $this->assertEquals($expect, $actual);
    }


    function test_take_1() {
        $n = 1;
        $input = [1,2,3];
        $expect = [1];
        $actual = iterator_to_array(take($n, $input));

        $this->assertEquals($expect, $actual);
    }


    function test_take_more_than_input() {
        $n = 4;
        $input = [1,2,3];
        $expect = $input;
        $actual = iterator_to_array(take($n, $input));

        // sanity check
        $this->assertTrue(count($input) < $n);

        $this->assertEquals($expect, $actual);
    }


}

