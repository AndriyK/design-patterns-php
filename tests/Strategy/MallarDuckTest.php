<?php
use \Kondrat\DesignPatterns\Strategy\MallarDuck;

class MallarDuckTest extends PHPUnit_Framework_TestCase {

    protected $duck;

    protected function setUp()
    {
        $this->duck = new MallarDuck();
    }

    public function testDisplay()
    {
        $this->assertEquals("I'm MallarDuck!", $this->duck->display());
    }

    public function testPerformFly()
    {
        $this->assertEquals("I'm flying with wings!", $this->duck->performFly());
    }

    public function testPerformQuack()
    {
        $this->assertEquals("Quak-quak!", $this->duck->performQuack());
    }
}