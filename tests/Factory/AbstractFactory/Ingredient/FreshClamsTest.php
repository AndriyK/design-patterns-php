<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FreshClams;

class FreshClamsTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $ing = new FreshClams();
        $this->assertEquals("Fresh clams", strval($ing));
    }
}