<?php
 
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyRocketPowered;
 
class FlyRocketPoweredTest extends PHPUnit_Framework_TestCase {
 
    public function testFly()
    {
        $frp = new FlyRocketPowered();
        $this->assertEquals("I'm flying on the Ro-o-o-c-k-e-t!", $frp->fly());
    }
 
}