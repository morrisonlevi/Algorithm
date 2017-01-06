<?php

namespace morrisonlevi\Algorithm;


class ConcatTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $expect = [1,2,3,4];
        $actual = iterator_to_array(concat([1,2], [3,4]), false);

        self::assertEquals($expect, $actual);

    }

    function test_none() {
        $expect = [];
        $actual = iterator_to_array(concat());
        self::assertEquals($expect, $actual);
    }


}
