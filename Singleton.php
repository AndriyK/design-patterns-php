<?php
require_once __DIR__ . '/vendor/autoload.php';

use \Kondrat\DesignPatterns\Singleton\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();

echo "Initial boiler state: empty -" . (int) $boiler->isEmpty() . ", boiled - " . (int) $boiler->isBoiled();
echo "<br>";

echo "<br>";
echo "Filling boiler...";
echo "<br>";

$boiler->fill();

echo "... boiler state: empty -" . (int) $boiler->isEmpty() . ", boiled - " . (int) $boiler->isBoiled();
echo "<br>";

echo "<br>";
echo "Getting one more boiler instance...";
echo "<br>";

$boiler2 = ChocolateBoiler::getInstance();

echo "Initial boiler2 state: empty -" . (int) $boiler->isEmpty() . ", boiled - " . (int) $boiler->isBoiled();
echo "<br>";

echo "<br>";
echo "Boiling boiler2...";
echo "<br>";

$boiler2->boil();

echo "... boiler2 state: empty -" . (int) $boiler2->isEmpty() . ", boiled - " . (int) $boiler2->isBoiled();
echo "<br>";
echo "... boiler state: empty -" . (int) $boiler->isEmpty() . ", boiled - " . (int) $boiler->isBoiled();
echo "<br>";

echo "<br>";
echo "Draining boiler...";
echo "<br>";

$boiler->drain();

echo "... boiler state: empty -" . (int) $boiler->isEmpty() . ", boiled - " . (int) $boiler->isBoiled();
echo "<br>";
echo "... boiler2 state: empty -" . (int) $boiler2->isEmpty() . ", boiled - " . (int) $boiler2->isBoiled();
echo "<br>";