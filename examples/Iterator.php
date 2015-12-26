<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Iterator;

$pancakeMenu = new Iterator\Menu\PancakeHouseMenu();
$dinerMenu = new Iterator\Menu\DinerMenu();
$cafeMenu = new Iterator\Menu\CafeMenu();

$waitress = new Iterator\Waitress($pancakeMenu, $dinerMenu, $cafeMenu);

echo "<pre>";

echo $waitress->printMenu();
