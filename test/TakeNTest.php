<?php

namespace morrisonlevi\Algorithm;


class TakeNTest extends \PHPUnit\Framework\TestCase {


    function test_take_zero() {
        $n = 0;
        $input = [1,2,3];
        $expect = [];
        $take = takeN($n);
        $actual = iterator_to_array($take($input));

        $this->assertEquals($expect, $actual);
    }


    function test_take_1() {
        $n = 1;
        $input = [1,2,3];
        $expect = [1];
        $take = takeN($n);
        $actual = iterator_to_array($take($input));

        $this->assertEquals($expect, $actual);
    }


    function test_take_more_than_input() {
        $n = 4;
        $input = [1,2,3];
        $expect = $input;
        $take = takeN($n);
        $actual = iterator_to_array($take($input));

        // sanity check
        $this->assertTrue(count($input) < $n);

        $this->assertEquals($expect, $actual);
    }


}
