<?php
use \Kondrat\DesignPatterns\Adapter\WildTurkey;

class WildTurkeyTest extends PHPUnit_Framework_TestCase
{
    protected $turkey;

    protected function setUp()
    {
        $this->turkey = new WildTurkey();
    }

    public function testGooble()
    {
        $this->assertEquals("Gooble gooble", $this->turkey->gooble());
    }

    public function testToString()
    {
        $this->assertEquals("I am flying a short distance", $this->turkey->fly());
    }
}