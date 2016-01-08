<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\State\GumballMachine;

$machine = new GumballMachine(5);

echo "<pre>";

echo $machine;
echo "\n";
echo $machine->insertQuarter();
echo $machine->turnCrank();
echo "\n";
echo $machine;
echo "\n";
echo $machine->insertQuarter();
echo $machine->ejectQuarter();
echo $machine->turnCrank();
echo "\n";
echo $machine;
echo "\n";
echo $machine->insertQuarter();
echo $machine->turnCrank();
echo $machine->insertQuarter();
echo $machine->turnCrank();
echo $machine->ejectQuarter();
echo "\n";
echo $machine;
echo "\n";
echo $machine->insertQuarter();
echo $machine->insertQuarter();
echo $machine->turnCrank();
echo $machine->insertQuarter();
echo $machine->turnCrank();
echo $machine->turnCrank();
echo "\n";
echo $machine;