<?php
use \Kondrat\DesignPatterns\Observer\Subject\WeatherData;
use \Kondrat\DesignPatterns\Observer\Observers\ForecastDisplay;

class ForecastDisplayTest extends PHPUnit_Framework_TestCase
{
    protected $displayWidget;

    protected function setUp()
    {
        $this->displayWidget = new ForecastDisplay( new WeatherData() );
    }

    public function testDisplay()
    {
        $expected = "ForecastDisplay: today is going to be dry.";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

    public function testUpdate()
    {
        $this->displayWidget->update(80, 65, 35);
        $expected = "ForecastDisplay: today is going to be rain.";
        $this->assertEquals($expected, $this->displayWidget->display());

        $this->displayWidget->update(80, 20, 35);
        $expected = "ForecastDisplay: today is going to be dry.";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

}