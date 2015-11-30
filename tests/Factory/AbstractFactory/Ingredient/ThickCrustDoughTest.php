<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThickCrustDough;

class ThickCrustDoughTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new ThickCrustDough();
        $this->assertEquals("Thick crust dough", strval($ing));
    }
}