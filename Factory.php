<?php
require_once __DIR__ . '/vendor/autoload.php';

use \Kondrat\DesignPatterns\Factory\SimpleFactory as SF;
use \Kondrat\DesignPatterns\Factory\FactoryMethod as FM;
use \Kondrat\DesignPatterns\Factory\AbstractFactory as AF;


echo "<pre>";

echo "********* Simple Factory ************ \n";
$store = new SF\PizzaStore( new SF\SimplePizzaFactory() );
echo $store->orderPizza(SF\PizzaStore::PIZZA_PEPPERONI);
echo "\n";
echo $store->orderPizza(SF\PizzaStore::PIZZA_VEGGIE);
echo "\n";

echo "\n";
echo "********* Factory Method ************ \n";
$NYStore = new FM\NewYorkStore\NYStylePizzaStore();
echo $NYStore->orderPizza(FM\AbstractPizzaStore::PIZZA_CLAM);
echo "\n";
$ChicagoStore = new FM\ChicagoStore\ChicagoStylePizzaStore();
echo $ChicagoStore->orderPizza(FM\AbstractPizzaStore::PIZZA_PEPPERONI);
echo "\n";

echo "\n";
echo "********* Abstract Factory ************ \n";
$NYStore = new AF\NYPizzaStore();
echo $NYStore->orderPizza(AF\AbstractPizzaStore::PIZZA_CLAM);
echo "\n";
$ChicagoStore = new AF\ChicagoPizzaStore();
echo $ChicagoStore->orderPizza(AF\AbstractPizzaStore::PIZZA_CLAM);