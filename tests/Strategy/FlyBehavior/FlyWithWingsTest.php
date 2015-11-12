<?php
 
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyWithWings;
 
class FlyWithWingsTest extends PHPUnit_Framework_TestCase {
 
    public function testFly()
    {
        $fww = new FlyWithWings();
        $this->assertEquals("I'm flying with wings!", $fww->fly());
    }
 
}