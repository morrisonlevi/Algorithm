<?php

namespace morrisonlevi\Algorithm;


class ChunkTest extends \PHPUnit\Framework\TestCase {


    function test_small_chunk() {
        $input = range(0, 2);

        $chunker = chunk(count($input) + 1);
        $expect = [$input];
        $actual = iterator_to_array($chunker($input));

        $this->assertEquals($expect, $actual);
    }


    function test_complete_chunks() {
        $input = range(0, 9);

        $chunker = chunk(5);
        $expect = [range(0, 4), range(5, 9)];
        $actual = iterator_to_array($chunker($input));

        $this->assertEquals($expect, $actual);
    }


    function test_incomplete_final_chunk() {
        $input = range(0, 9);

        $chunker = chunk(3);
        $expect = [[0,1,2], [3,4,5], [6,7,8], [9]];
        $actual = iterator_to_array($chunker($input));

        $this->assertEquals($expect, $actual);
    }


}

