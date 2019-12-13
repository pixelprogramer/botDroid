<?php

use calculadora;

class holaMundoTest extends \PHPUnit\Framework\TestCase
{
    public function testSuma()
    {
        $holaMundo = new calculadora();
        $this->assertEquals(
            3,
            $holaMundo->suma(2, 1)
        );
    }
}