<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStyleClamPizza;

class NYStyleClamPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new NYStyleClamPizza();
    }

    public function testGetName()
    {
        $expected = "clam (NY style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}