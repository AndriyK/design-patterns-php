<?php
use \Kondrat\DesignPatterns\Observer\Subject\WeatherData;
use \Kondrat\DesignPatterns\Observer\Observers\ThirdPartyDisplay;

class ThirdPartyDisplayTest extends PHPUnit_Framework_TestCase
{
    protected $displayWidget;

    protected function setUp()
    {
        $this->displayWidget = new ThirdPartyDisplay( new WeatherData() );
    }

    public function testDisplay()
    {
        $expected = "ThirdPartyDisplay: some data for temperature(0), pressure(0) and humidity(0).";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

    public function testUpdate()
    {
        $this->displayWidget->update(80, 65, 35);

        $expected = "ThirdPartyDisplay: some data for temperature(80), pressure(65) and humidity(35).";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

    public function testDisable() {
        $subject = new WeatherData();
        $display = new ThirdPartyDisplay($subject);

        $expected = "ThirdPartyDisplay: some data for temperature(0), pressure(0) and humidity(0).";
        $this->assertEquals($expected, $display->display());

        $subject->setMeasurements(80, 65, 35);
        $expected = "ThirdPartyDisplay: some data for temperature(80), pressure(65) and humidity(35).";
        $this->assertEquals($expected, $display->display());

        $display->disable();
        $subject->setMeasurements(10, 10, 10);

        $expected = "ThirdPartyDisplay: some data for temperature(80), pressure(65) and humidity(35).";
        $this->assertEquals($expected, $display->display());
    }
}