<?php
namespace Kondrat\DesignPatterns\State;

interface StateInterface {

    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}
