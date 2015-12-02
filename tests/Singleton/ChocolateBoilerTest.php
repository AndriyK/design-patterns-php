<?php
use \Kondrat\DesignPatterns\Singleton\ChocolateBoiler;

class ChocolateBoilerTest extends PHPUnit_Framework_TestCase
{
    protected $boiler;

    protected function setUp()
    {
        $this->boiler = ChocolateBoiler::getInstance();
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->boiler->isEmpty());
    }

    public function testIsBoiled()
    {
        $this->assertFalse($this->boiler->isBoiled());
    }

    public function testBoil_wrongCase_noEffect()
    {
        $this->assertFalse($this->boiler->isBoiled());

        $this->boiler->boil();

        $this->assertFalse($this->boiler->isBoiled());
    }

    public function testFill()
    {
        $this->assertTrue($this->boiler->isEmpty());

        $this->boiler->fill();

        $this->assertFalse($this->boiler->isEmpty());
    }

    public function testDrain_wrongCase_noEffect()
    {
        $this->assertFalse($this->boiler->isEmpty());

        $this->boiler->drain();

        $this->assertFalse($this->boiler->isEmpty());
    }

    public function testBoil()
    {
        $this->assertFalse($this->boiler->isBoiled());

        $this->boiler->boil();

        $this->assertTrue($this->boiler->isBoiled());
    }

    public function testDrain()
    {
        $this->assertFalse($this->boiler->isEmpty());

        $this->boiler->drain();

        $this->assertTrue($this->boiler->isEmpty());
    }

    public function testGetInstance()
    {
        $boiler = ChocolateBoiler::getInstance();
        $this->assertInstanceOf('\Kondrat\DesignPatterns\Singleton\ChocolateBoiler', $boiler);
        $this->assertEquals($boiler, $this->boiler);
    }

    public function testSameInstance()
    {
        $this->assertTrue($this->boiler->isEmpty());

        $this->boiler->fill();

        $this->assertFalse($this->boiler->isEmpty());

        $boiler = ChocolateBoiler::getInstance();
        $this->assertFalse($boiler->isEmpty());

        $this->assertFalse($this->boiler->isBoiled());
        $this->assertFalse($boiler->isBoiled());

        $boiler->boil();

        $this->assertTrue($this->boiler->isBoiled());
        $this->assertTrue($boiler->isBoiled());
    }
}