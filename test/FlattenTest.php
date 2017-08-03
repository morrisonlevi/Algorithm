<?php

namespace morrisonlevi\Algorithm;


class FlattenTest extends \PHPUnit\Framework\TestCase {

    function test() {
        $result = flatten([
            [1, 2],
            [3, 4]
        ]);

        $expect = [1, 2, 3, 4];
        $actual = iterator_to_array($result, false);
        $this->assertEquals($expect, $actual);
    }

    function test_variadic() {
        $result = flatten([[1, 2],[3, 4]], [[5, 6]]);

        $expect = [1, 2, 3, 4, 5, 6];
        $actual = iterator_to_array($result, false);
        $this->assertEquals($expect, $actual);
    }

}

