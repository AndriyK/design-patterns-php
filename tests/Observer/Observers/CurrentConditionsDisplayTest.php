<?php

use \Kondrat\DesignPatterns\Observer\Subject\WeatherData;
use \Kondrat\DesignPatterns\Observer\Observers\CurrentConditionsDisplay;

class CurrentConditionsDisplayTest extends PHPUnit_Framework_TestCase
{
    protected $displayWidget;

    protected function setUp()
    {
        $this->displayWidget = new CurrentConditionsDisplay( new WeatherData() );
    }

    public function testDisplay()
    {
        $expected = "CurrentConditionsDisplay: 0 F degrees and 0% humidity.";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

    public function testUpdate()
    {
        $this->displayWidget->update(80, 65, 35);

        $expected = "CurrentConditionsDisplay: 80 F degrees and 35% humidity.";
        $this->assertEquals($expected, $this->displayWidget->display());
    }

}