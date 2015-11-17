<?php
namespace Kondrat\DesignPatterns\Observer\Observers;

use \Kondrat\DesignPatterns\Observer\Observers\ObserverInterface;
use \Kondrat\DesignPatterns\Observer\Observers\DisplayElementInterface;
use Kondrat\DesignPatterns\Observer\Subject\SubjectInterface;

class ThirdPartyDisplay implements ObserverInterface, DisplayElementInterface
{
    private $subject;

    private $temperature = 0;
    private $pressure = 0;
    private $humidity = 0;

    public function __construct(SubjectInterface $s)
    {
        $this->subject = $s;
        $this->subject->registerObserver($this);
    }

    public function update($temperature, $pressure, $humidity) {
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }

    public function display() {
        return "ThirdPartyDisplay: some data for temperature({$this->temperature}), pressure({$this->pressure}) and humidity({$this->humidity}).";
    }

    public function disable() {
        $this->subject->removeObserver($this);
    }
}