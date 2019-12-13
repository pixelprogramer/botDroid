<?php

class holaMundoTest extends \PHPUnit\Framework\TestCase
{
    public function testSuma()
    {
    $holaMundo= new holaMundo();
    $this->assertEquals(
        3,
        $holaMundo->suma(2,1)
    );
    }
}