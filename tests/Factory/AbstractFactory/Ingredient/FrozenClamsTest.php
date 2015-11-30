<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FrozenClams;

class FrozenClamsTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new FrozenClams();
        $this->assertEquals("Frozen clams", strval($ing));
    }
}