<?php
ini_set('display_errors',1);

require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\CompoundPatterns\DuckSimulator;
use Kondrat\DesignPatterns\CompoundPatterns\Factory\CountingDuckFactory;
use Kondrat\DesignPatterns\CompoundPatterns\Factory\QuackableGooseFactory;

echo "<pre>";

$simulator = new DuckSimulator();
$simulator->simulate( new CountingDuckFactory(), new QuackableGooseFactory());

