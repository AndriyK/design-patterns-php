<?php
 
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Quack;
 
class QuackTest extends PHPUnit_Framework_TestCase {
 
    public function testQuak()
    {
        $q = new Quack();
        $this->assertEquals("Quak-quak!", $q->quak());
    }
 
}