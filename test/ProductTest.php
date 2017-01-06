<?php

namespace morrisonlevi\Algorithm;


class ProductTest extends \PHPUnit_Framework_TestCase {


    function test_product_default() {
        $product = product();
        $input = [2,3,4];
        $expect = 2*3*4;
        $actual = $product($input);

        self::assertEquals($expect, $actual);
    }


    function test_product_initial() {
        $product = product(5);
        $input = [2,3,4];
        $expect = 5*2*3*4;
        $actual = $product($input);

        self::assertEquals($expect, $actual);
    }


}

