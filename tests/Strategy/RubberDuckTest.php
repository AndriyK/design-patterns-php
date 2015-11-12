<?php

use \Kondrat\DesignPatterns\Strategy\RubberDuck;

class RubberDuckTest extends PHPUnit_Framework_TestCase {

    protected $duck;

    protected function setUp()
    {
        $this->duck = new RubberDuck();
    }

    public function testDisplay()
    {
        $this->assertEquals("I'm RubberDuck!", $this->duck->display());
    }

    public function testPerformFly()
    {
        $this->assertEquals("I can't fly...", $this->duck->performFly());
    }

    public function testPerformQuack()
    {
        $this->assertEquals("Piiii-piiii!", $this->duck->performQuack());
    }

}