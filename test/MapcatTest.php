<?php

namespace morrisonlevi\Algorithm;


class MapcatTest extends \PHPUnit\Framework\TestCase {


    function test() {
        $fn = mapcat(function ($x) {
            yield $x;
            yield $x;
        });

        $input = [1,2];
        $expect = [1,1,2,2];
        $actual = iterator_to_array($fn($input), false);

        $this->assertEquals($expect, $actual);

    }


}
