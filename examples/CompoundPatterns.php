<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\CompoundPatterns\DuckSimulator;

echo "<pre>";

$simulator = new DuckSimulator();
$simulator->simulate();

