<?php

namespace morrisonlevi\Algorithm;


class BindTest extends \PHPUnit_Framework_TestCase {


    function test_map_single_parameter() {
        $double = function($value) {
            return $value * 2;
        };

        $map = bind(__NAMESPACE__ . '\\map', $double);

        $input = [1,2,3];
        $expect = [2,4,6];
        $actual = iterator_to_array($map($input));

        $this->assertEquals($expect, $actual);
    }


    function test_reduce_two_parameters() {
        $reducing_function = function($a, $b) {
            return $a * $b;
        };

        $initial = 1;

        $reduce = bind(__NAMESPACE__ . '\\reduce', $reducing_function, $initial);

        $input = [2,4,6];
        $expect = $initial * 2 * 4 * 6;
        $actual = $reduce($input);

        $this->assertEquals($expect, $actual);
    }


}

