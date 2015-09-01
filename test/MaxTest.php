<?php

namespace morrisonlevi\Algorithm;


class MaxTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $input = range(0, 2);

        $maxer = max();
        $withInitial = $maxer(-1);
        $expect = 2;
        $actual = $withInitial($input);

        $this->assertEquals($expect, $actual);
    }


}

