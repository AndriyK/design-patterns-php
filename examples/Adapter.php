<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Adapter\MallardDuck;
use \Kondrat\DesignPatterns\Adapter\WildTurkey;
use \Kondrat\DesignPatterns\Adapter\TurkeyAdapter;

$duck = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "<b>The turkey says...</b>";
echo "<br>";
echo $turkey->gooble()."<br>";
echo $turkey->fly()."<br>";
echo "<br>";

echo "<b>The duck says...</b>";
echo "<br>";
echo $duck->quack()."<br>";
echo $duck->fly()."<br>";
echo "<br>";

echo "<b>The turkey adapter says...</b>";
echo "<br>";
echo $turkeyAdapter->quack()."<br>";
echo nl2br($turkeyAdapter->fly());

