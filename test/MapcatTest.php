<?php

namespace morrisonlevi\Algorithm;


class MapcatTest extends \PHPUnit_Framework_TestCase {


    function test() {
        $fn = mapcat(function ($x) {
            yield $x;
            yield $x;
        });

        $input = [1,2];
        $expect = [1,1,2,2];
        $actual = iterator_to_array($fn($input), false);

        self::assertEquals($expect, $actual);

    }


}
