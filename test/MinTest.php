<?php

namespace morrisonlevi\Algorithm;


class MinTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $input = range(0, 2);

        $minner = min(3);
        $minner = $minner();
        $expect = 0;
        $actual = $minner($input);

        $this->assertEquals($expect, $actual);
    }


}

