<?php
 
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyNoWay;
 
class FlyNoWayTest extends PHPUnit_Framework_TestCase {
 
    public function testFly()
    {
        $fnw = new FlyNoWay();
        $this->assertEquals("I can't fly...", $fnw->fly());
    }

}