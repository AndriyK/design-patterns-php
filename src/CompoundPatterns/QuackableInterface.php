<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

interface QuackableInterface extends QuackObservableInterface
{
    public function quack();
}