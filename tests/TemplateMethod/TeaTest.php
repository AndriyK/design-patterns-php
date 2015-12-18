<?php
use \Kondrat\DesignPatterns\TemplateMethod\Tea;

class TeaTest extends PHPUnit_Framework_TestCase
{
    public function testPrepareReciepe()
    {
        $tea = new Tea();

        $expected = "Boiling water.\n";
        $expected .= "Steeping the tea.\n";
        $expected .= "Pouring into cup.\n";
        $expected .= "Adding lemon.\n";

        $this->assertEquals($expected, $tea->prepareReceipe());
    }
}
