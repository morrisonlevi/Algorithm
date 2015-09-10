<?php

namespace morrisonlevi\Algorithm;


class ConcatTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $input = [[1,2], [3,4]];
        $expect = [1,2,3,4];
        $actual = iterator_to_array(concat(...$input), false);

        $this->assertEquals($expect, $actual);

    }


}
