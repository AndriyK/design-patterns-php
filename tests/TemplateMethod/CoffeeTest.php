<?php
use \Kondrat\DesignPatterns\TemplateMethod\Coffee;

class CoffeeTest extends PHPUnit_Framework_TestCase
{
    public function testPrepareReciepe()
    {
        $cofee = new Coffee();

        $expected = "Boiling water.\n";
        $expected .= "Dripping cofee through filter.\n";
        $expected .= "Pouring into cup.\n";
        $expected .= "Adding sugar and milk.\n";

        $this->assertEquals($expected, $cofee->prepareReceipe());
    }
}
