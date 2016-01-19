<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

interface ObserverInterface
{
    public function update(QuackObservableInterface $duck);
}