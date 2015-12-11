<?php
use \Kondrat\DesignPatterns\Adapter\TurkeyAdapter;
use \Kondrat\DesignPatterns\Adapter\WildTurkey;

class TurkeyAdapterTest extends PHPUnit_Framework_TestCase
{
    protected $adapter;

    protected function setUp()
    {
        $this->adapter = new TurkeyAdapter( new WildTurkey() );
    }

    public function testQuack()
    {
        $this->assertEquals("Gooble gooble", $this->adapter->quack());
    }

    public function testToString()
    {
        $this->assertEquals("I am flying a short distance\nI am flying a short distance\nI am flying a short distance", $this->adapter->fly());
    }
}