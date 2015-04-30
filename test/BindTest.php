<?php

namespace morrisonlevi\Algorithm;


class BindTest extends \PHPUnit_Framework_TestCase {


    function test_single_parameter() {

        $strlen = bind('strlen', 'asdf');

        $expect = strlen('asdf');
        $actual = $strlen();

        $this->assertEquals($expect, $actual);

    }


    function test_reduce_two_parameters() {

        $make_strlen = bind(__NAMESPACE__ . '\\bind', 'strlen', 'asdf');

        $expect = strlen('asdf');
        $strlen = $make_strlen();
        $actual = $strlen();

        $this->assertEquals($expect, $actual);
    }


}

