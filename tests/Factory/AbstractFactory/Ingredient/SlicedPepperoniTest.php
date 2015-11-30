<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\SlicedPepperoni;

class SlicedPepperoniTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new SlicedPepperoni();
        $this->assertEquals("Sliced pepperoni", strval($ing));
    }
}