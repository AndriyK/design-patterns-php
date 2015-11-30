<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MozzarellaCheese;

class MozzarellaCheeseTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new MozzarellaCheese();
        $this->assertEquals("Mozzarella cheese", strval($ing));
    }
}