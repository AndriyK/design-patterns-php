<?php
 
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\MuteQuack;
 
class MuteQuackTest extends PHPUnit_Framework_TestCase {
 
    public function testQuak()
    {
        $mq = new MuteQuack();
        $this->assertEquals("I'm mute: silence...", $mq->quak());
    }
 
}