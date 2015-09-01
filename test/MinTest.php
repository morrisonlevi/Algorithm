<?php

namespace morrisonlevi\Algorithm;


class MinTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $input = range(0, 2);

        $minner = min();
        $withInitial = $minner(3);
        $expect = 0;
        $actual = $withInitial($input);

        $this->assertEquals($expect, $actual);
    }


}

