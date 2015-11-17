<?php
use \Kondrat\DesignPatterns\Observer\Subject\WeatherData;
use \Kondrat\DesignPatterns\Observer\Observers\CurrentConditionsDisplay;

class WeatherDataTest extends PHPUnit_Framework_TestCase
{

    public function testRegisterObserverAndSetMeasurementsAndNotifyObservers()
    {
        $weatherData = new WeatherData();

        $curCondDisplay = new CurrentConditionsDisplay($weatherData);

        // before any update from weatherData
        $expected = "CurrentConditionsDisplay: 0 F degrees and 0% humidity.";
        $this->assertEquals($expected, $curCondDisplay->display());

        // change weatherData, so current conditions should change as well
        $weatherData->setMeasurements(5,5,5);

        $expected = "CurrentConditionsDisplay: 5 F degrees and 5% humidity.";
        $this->assertEquals($expected, $curCondDisplay->display());
    }

    public function testRemoveObserver()
    {
        $weatherData = new WeatherData();

        $curCondDisplay = new CurrentConditionsDisplay($weatherData);

        // before any update from weatherData
        $expected = "CurrentConditionsDisplay: 0 F degrees and 0% humidity.";
        $this->assertEquals($expected, $curCondDisplay->display());

        // remove currentConditionsDisplay from Observers
        $weatherData->removeObserver($curCondDisplay);

        // change weatherData, so current conditions should change as well
        $weatherData->setMeasurements(5,5,5);

        // same message observer was not notified
        $this->assertEquals($expected, $curCondDisplay->display());
    }
}