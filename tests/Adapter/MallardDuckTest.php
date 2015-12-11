<?php
use \Kondrat\DesignPatterns\Adapter\MallardDuck;

class MallardDuckTest extends PHPUnit_Framework_TestCase
{
    protected $duck;

    protected function setUp()
    {
        $this->duck = new MallardDuck();
    }

    public function testQuack()
    {
        $this->assertEquals("Quack", $this->duck->quack());
    }

    public function testToString()
    {
        $this->assertEquals("I am flying", $this->duck->fly());
    }
}