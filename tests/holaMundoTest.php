<?php



require_once  __DIR__  .  ' /calculadora.php' ;

class holaMundoTest extends \PHPUnit\Framework\TestCase
{
    public function testSuma()
    {
    $calculadora = new calculadora();
        $this->assertEquals(
            3,
            $calculadora->suma(2,2)
        );
    }
}
