<?php

namespace morrisonlevi\Algorithm;


class PipeTest extends \PHPUnit_Framework_TestCase {


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
	    $x = 5;
        $f = $this->f();
        $c = pipe($x, $f);

        // sanity check
        self::assertSame($f($x), $x + 1);

	    self::assertSame($f($x), $c);
    }


    function test_two() {
	    $x = 3;
        $f = $this->f();
        $g = $this->g();

        $c = pipe($x, $f, $g);

        // sanity check
	    self::assertSame($g($f($x)), ($x + 1) * 2);

	    self::assertSame($g($f($x)), $c);
    }


}