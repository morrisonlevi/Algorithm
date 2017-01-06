<?php

namespace morrisonlevi\Algorithm;


class ChainTest extends \PHPUnit_Framework_TestCase {


    function f() {
        static $f = null;
        if ($f === null) {
            $f = function($x) {
                return $x + 1;
            };
        }
        return $f;
    }


    function g() {
        return function($x) {
            return $x * 2;
        };
    }


    function test_single() {
        $f = $this->f();
        $c = chain($f);
        $x = 5;

        // sanity check
        $this->assertTrue($f($x) === $x + 1);

        $this->assertTrue($f($x) === $c($x));
    }


    function test_two() {
        $f = $this->f();
        $g = $this->g();

        $c = chain($f, $g);
        $x = 3;

        // sanity check
        $this->assertTrue($g($f($x)) === ($x + 1) * 2);

        $this->assertTrue($g($f($x)) === $c($x));
    }


}