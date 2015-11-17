<?php
namespace Kondrat\DesignPatterns\Observer\Subject;

use \Kondrat\DesignPatterns\Observer\Subject\SubjectInterface;
use \Kondrat\DesignPatterns\Observer\Observers\ObserverInterface;


class WeatherData implements SubjectInterface
{
    private $temperature = 0;
    private $pressure = 0;
    private $humidity = 0;

    private $observers = array();

    public function registerObserver(ObserverInterface $o) {
        $this->observers[] = $o;
    }

    public function removeObserver(ObserverInterface $o) {
        foreach($this->observers as $key => $observer) {
            if($observer === $o){
                unset($this->observers[$key]);
                break;
            }
        }
    }

    public function notifyObservers() {
        foreach($this->observers as $observer) {
            $observer->update($this->getTemperature(), $this->getPressure(), $this->getHumidity());
        }
    }

    private function getTemperature() {
        return $this->temperature;
    }

    private function getPressure() {
        return $this->pressure;
    }

    private function getHumidity() {
        return $this->humidity;
    }

    private function measurementsChanged() {
        return $this->notifyObservers();
    }

    public function setMeasurements($temperature, $pressure, $humidity) {
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
        $this->measurementsChanged();
    }
}