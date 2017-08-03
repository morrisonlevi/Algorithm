<?php

namespace morrisonlevi\Algorithm;


class ReduceTest extends \PHPUnit\Framework\TestCase {


    function sum() {
        return function($a, $b) {
            return $a + $b;
        };
    }


    function test_reduce_none_returns_initial() {
        $input = [];
        $initial = 0;
        $expect = $initial;
        $combining_function = reduce($initial);
        $reduce = $combining_function($this->sum());
        $actual = $reduce($input);
        $this->assertEquals($expect, $actual);
    }


    function test_reduce_basic() {
        $input = [1, 2, 3];
        $initial = 0;
        $expect = 6;
        $combining_function = reduce($initial);
        $reduce = $combining_function($this->sum());
        $actual = $reduce($input);
        $this->assertEquals($expect, $actual);
    }


}
