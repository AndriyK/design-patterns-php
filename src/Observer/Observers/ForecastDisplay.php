<?php
namespace Kondrat\DesignPatterns\Observer\Observers;

use \Kondrat\DesignPatterns\Observer\Observers\ObserverInterface;
use \Kondrat\DesignPatterns\Observer\observers\DisplayElementInterface;
use Kondrat\DesignPatterns\Observer\Subject\SubjectInterface;

class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
    private $subject;

    private $pressure = 0;

    public function __construct(SubjectInterface $s)
    {
        $this->subject = $s;
        $this->subject->registerObserver($this);
    }

    public function update($temperature, $pressure, $humidity) {
        $this->pressure = $pressure;
    }

    public function display() {
        return "ForecastDisplay: today is going to be " . ($this->pressure > 50 ? 'rain' : 'dry') . ".";
    }

}