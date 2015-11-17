<?php
namespace Kondrat\DesignPatterns\Observer\Subject;

use \Kondrat\DesignPatterns\Observer\Observers\ObserverInterface;

interface SubjectInterface {
    public function registerObserver(ObserverInterface $o);
    public function removeObserver(ObserverInterface $o);
    public function notifyObservers();
}