<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MarinaraSauce;

class MarinaraSauceTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new MarinaraSauce();
        $this->assertEquals("Marinara sauce", strval($ing));
    }
}