<?php

namespace morrisonlevi\Algorithm;


class SumTest extends \PHPUnit_Framework_TestCase {


    function test_sum_default() {
        $sum = sum();
        $input = [2,3,4];
        $expect = 2+3+4;
        $actual = $sum($input);
        $this->assertEquals($actual, $expect);
    }


    function test_sum_initial() {
        $sum = sum(4);
        $input = [1,2,3];
        $expect = 4+1+2+3;
        $actual = $sum($input);
        $this->assertEquals($actual, $expect);
    }


}

