<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Factory;

abstract class AbstractDuckFactory
{
    public abstract function createMallardDuck();
    public abstract function createRedheadDuck();
    public abstract function createDuckCall();
    public abstract function createRubberDuck();
}