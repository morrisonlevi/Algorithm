<?php

namespace morrisonlevi\Algorithm;


class SkipTest extends \PHPUnit\Framework\TestCase {


    function test_skip_none() {
        $skip = skip(function($value) {
            return $value % 2 > 0;
        });

        $input = [0,2,3];
        $expect = $input;
        $actual = iterator_to_array($skip($input));

        $this->assertEquals($expect, $actual);
    }


    function test_skip_one() {
        $skip = skip(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,2,3];
        $expect = [1 => 2, 2 => 3];
        $actual = iterator_to_array($skip($input));

        $this->assertEquals($expect, $actual);
    }


    function test_skip_all() {
        $skip = skip(function($value) {
            return $value % 2 > 0;
        });

        $input = [1,3,5];
        $expect = [];
        $actual = iterator_to_array($skip($input));

        $this->assertEquals($expect, $actual);
    }


}

