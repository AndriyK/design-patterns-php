<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\ClamPizza;

class ClamPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ClamPizza();
    }

    public function testGetName()
    {
        $expected = "clam";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}