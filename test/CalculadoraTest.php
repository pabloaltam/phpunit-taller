<?php
/**
 * Created by PhpStorm.
 * User: pabloav
 * Date: 03-08-17
 * Time: 09:46
 */
use PHPUnit\Framework\TestCase;


class CalculadoraTest extends TestCase
{
    private $calc;

    public function setUp()
    {
        $this->calc = new Calculadora;
    }

    public function testAsstert()
    {
        $this->assertTrue(true, 'Debe ser verdadero');
    }

    /**
     * @dataProvider numeros
     * @param $x
     * @param $y
     * @param $result
     */
    public function testSuma($x, $y, $result)
    {
        $this->assertEquals($result,$this->calc->sumar($x,$y));
    }

    public function testResta()
    {
        $this->assertEquals(2,$this->calc->restar(4,2));
    }

    public function numeros()
    {
        return [
          [2,3,5],
          [2,3,5],
          [2,3,5],
          [2,3,5],
        ];
    }
}