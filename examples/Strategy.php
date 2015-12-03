<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Strategy\MallarDuck;
use \Kondrat\DesignPatterns\Strategy\RubberDuck;
use \Kondrat\DesignPatterns\Strategy\ModelDuck;
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyRocketPowered;
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Quack;

$duck = new MallarDuck();
echo $duck->display();
echo "<br>";
echo $duck->performFly();
echo "<br>";
echo $duck->performQuack();

echo "<br>";
echo "<br>";

$duck = new RubberDuck();
echo $duck->display();
echo "<br>";
echo $duck->performFly();
echo "<br>";
echo $duck->performQuack();

echo "<br>";
echo "<br>";

$duck = new ModelDuck();
echo $duck->display();
echo "<br>";
echo $duck->performFly();
echo "<br>";
echo $duck->performQuack();
echo "<br>...ModelDuck after 'modifications'...<br>";
$duck->setFlyBehavior(new FlyRocketPowered());
$duck->setQuackBehavior(new Quack());
echo $duck->performFly();
echo "<br>";
echo $duck->performQuack();
