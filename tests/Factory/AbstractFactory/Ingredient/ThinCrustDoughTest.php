<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThinCrustDough;

class ThinCrustDoughTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new ThinCrustDough();
        $this->assertEquals("Thin crust dough", strval($ing));
    }
}