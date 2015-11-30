<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\PlumTomatoSauce;

class PlumTomatoSauceTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new PlumTomatoSauce();
        $this->assertEquals("Plum tomato sauce", strval($ing));
    }
}