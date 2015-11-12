<?php

use \Kondrat\DesignPatterns\Strategy\ModelDuck;
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyRocketPowered;
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Quack;


class ModelDuckTest extends PHPUnit_Framework_TestCase {

    protected $duck;

    protected function setUp()
    {
        $this->duck = new ModelDuck();
    }

    public function testDisplay()
    {
        $this->assertEquals("I'm ModelDuck!", $this->duck->display());
    }

    public function testPerformFly()
    {
        $this->assertEquals("I can't fly...", $this->duck->performFly());
    }

    public function testPerformQuack()
    {
        $this->assertEquals("I'm mute: silence...", $this->duck->performQuack());
    }

    public function testSetFlyAndQuackBehavior()
    {
        $this->duck->setFlyBehavior( new FlyRocketPowered() );
        $this->duck->setQuackBehavior( new Quack() );

        $this->assertEquals("I'm flying on the Ro-o-o-c-k-e-t!", $this->duck->performFly());
        $this->assertEquals("Quak-quak!", $this->duck->performQuack()); 
    }
}