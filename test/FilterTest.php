<?php

namespace morrisonlevi\Algorithm;


class FilterTest extends \PHPUnit_Framework_TestCase {


    function test_empty() {
        $input = [];
        $filter_function = function($x) {
            return $x % 2 > 0;
        };
        $expect = $input;
        $actual = iterator_to_array(filter($filter_function, $input));
        $this->assertEquals($expect, $actual);
    }


    function test_no_match() {
        $input = [2, 4, 6];
        $filter_function = function($x) {
            return $x % 2 > 0;
        };
        $expect = [];
        $actual = iterator_to_array(filter($filter_function, $input));
        $this->assertEquals($expect, $actual);
    }


    function test_all_match() {
        $input = [1, 3, 5];
        $filter_function = function($x) {
            return $x % 2 > 0;
        };
        $expect = $input;
        $actual = iterator_to_array(filter($filter_function, $input));
        $this->assertEquals($expect, $actual);
    }


    function test_some_match() {
        $input = [1, 2, 3];
        $filter_function = function($x) {
            return $x % 2 > 0;
        };
        $expect = [0 => 1, 2 => 3];
        $actual = iterator_to_array(filter($filter_function, $input));
        $this->assertEquals($expect, $actual);
    }


}