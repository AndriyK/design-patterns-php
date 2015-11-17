<?php
namespace Kondrat\DesignPatterns\Observer\Observers;

interface ObserverInterface {
    public function update($temperature, $pressure, $humidity);
}