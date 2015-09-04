<?php

namespace morrisonlevi\Algorithm;


class MaxTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $input = range(0, 2);

        $maxer = max(-1);
        $maxer = $maxer();
        $expect = 2;
        $actual = $maxer($input);

        $this->assertEquals($expect, $actual);
    }


}

