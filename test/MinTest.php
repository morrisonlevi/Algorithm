<?php

namespace morrisonlevi\Algorithm;


class MinTest extends \PHPUnit\Framework\TestCase {


    function test() {
        $input = range(0, 2);

        $minner = min(3);
        $minner = $minner();
        $expect = 0;
        $actual = $minner($input);

        $this->assertEquals($expect, $actual);
    }


}

