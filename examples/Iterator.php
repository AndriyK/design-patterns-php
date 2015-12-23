<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Iterator;

$pancakeMenu = new Iterator\Menu\PancakeHouseMenu();
$dinerMenu = new Iterator\Menu\DinerMenu();

$waitress = new Iterator\Waitress($pancakeMenu, $dinerMenu);

echo "<pre>";

echo $waitress->printMenu();
