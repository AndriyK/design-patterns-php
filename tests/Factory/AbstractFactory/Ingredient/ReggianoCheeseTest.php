<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ReggianoCheese;

class ReggianoCheeseTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new ReggianoCheese();
        $this->assertEquals("Reggiano cheese", strval($ing));
    }
}