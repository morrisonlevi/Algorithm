<?php

namespace morrisonlevi\Algorithm;


class ConcatTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $expect = [1,2,3,4];
        $actual = iterator_to_array(concat([1,2], [3,4]), false);

        $this->assertEquals($expect, $actual);

    }

    function test_none() {
        $expect = [];
        $actual = iterator_to_array(concat());
        $this->assertEquals($expect, $actual);
    }


}
