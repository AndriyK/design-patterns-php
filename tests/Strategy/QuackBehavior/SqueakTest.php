<?php
 
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Squeak;
 
class SqueakTest extends PHPUnit_Framework_TestCase {
 
    public function testQuak()
    {
        $s = new Squeak();
        $this->assertEquals("Piiii-piiii!", $s->quak());
    }
 
}