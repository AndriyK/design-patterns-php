<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\VeggiePizza;

class VeggiePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new VeggiePizza();
    }

    public function testGetName()
    {
        $expected = "veggie";
        $this->assertEquals($expected, $this->pizza->getName());
    }

    public function testBake()
    {
        $expected = "Baking pizza, 30 min with temperature 200...";
        $this->assertEquals($expected, $this->pizza->bake());
    }

}