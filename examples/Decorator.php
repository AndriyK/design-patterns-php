<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Decorator\StarbuzzCoffee;

$starbuzz = new StarbuzzCoffee();

echo "Ordering Espresso...";
echo "<br>";
echo "Final receipt-> " . $starbuzz->getEspresso();
echo "<br>";
echo "<br>";

echo "Ordering DarkRoast with double mocha and whip...";
echo "<br>";
echo "Final receipt-> " . $starbuzz->getDarkRoastWithDoubleMochaAndWhip();
echo "<br>";
echo "<br>";

echo "Ordering HouseBlend with mocha, soy and whip...";
echo "<br>";
echo "Final receipt-> " . $starbuzz->getHouseBlendWithMochaSoyAndWhip();
