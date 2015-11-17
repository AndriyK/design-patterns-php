<?php
use \Kondrat\DesignPatterns\Observer\WeatherStation;

class WeatherStationTest extends PHPUnit_Framework_TestCase
{
    protected $station;

    protected function setUp()
    {
        $this->station = new WeatherStation();
        $this->station->setWeatherConditions(60, 70, 50);
    }

    public function testShowCurrentConditions()
    {
        $expected = "CurrentConditionsDisplay: 60 F degrees and 50% humidity.";
        $this->assertEquals($expected, $this->station->showCurrentConditions());
    }

    public function testShowForecast()
    {
        $expected = "ForecastDisplay: today is going to be rain.";
        $this->assertEquals($expected, $this->station->showForecast());
    }

    public function testShowThirdPartyWidget()
    {
        $expected = "ThirdPartyDisplay: some data for temperature(60), pressure(70) and humidity(50).";
        $this->assertEquals($expected, $this->station->showThirdPartyWidget());
    }

    public function testDisableThirdPartyWidget()
    {
        $this->station->disableThirdPartyWidget();
        $this->station->setWeatherConditions(2, 2, 2);

        // data was not changed for thirdpartywidget
        $expected = "ThirdPartyDisplay: some data for temperature(60), pressure(70) and humidity(50).";
        $this->assertEquals($expected, $this->station->showThirdPartyWidget());
    }

    public function testSetWeatherConditions()
    {
        $this->station->setWeatherConditions(2, 2, 2);

        $expected = "CurrentConditionsDisplay: 2 F degrees and 2% humidity.";
        $this->assertEquals($expected, $this->station->showCurrentConditions());
    }
}