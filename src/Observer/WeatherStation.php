<?php
namespace Kondrat\DesignPatterns\Observer;

use Kondrat\DesignPatterns\Observer\Observers\CurrentConditionsDisplay;
use Kondrat\DesignPatterns\Observer\Observers\ForecastDisplay;
use Kondrat\DesignPatterns\Observer\Observers\ThirdPartyDisplay;
use Kondrat\DesignPatterns\Observer\Subject\WeatherData;

class WeatherStation
{
    private $weatherData;

    private $curCondDisplay;
    private $forecastDisplay;
    private $thirdPartyDisplay;

    public function __construct(){
        $this->weatherData = new WeatherData();

        $this->curCondDisplay = new CurrentConditionsDisplay($this->weatherData);
        $this->forecastDisplay = new ForecastDisplay($this->weatherData);
        $this->thirdPartyDisplay = new ThirdPartyDisplay($this->weatherData);
    }

    public function showCurrentConditions(){
        return $this->curCondDisplay->display();
    }

    public function showForecast(){
        return $this->forecastDisplay->display();
    }

    public function showThirdPartyWidget(){
        return $this->thirdPartyDisplay->display();
    }

    public function disableThirdPartyWidget(){
        $this->thirdPartyDisplay->disable();
    }

    public function setWeatherConditions($t, $p, $h){
        $this->weatherData->setMeasurements($t, $p, $h);
    }
}
