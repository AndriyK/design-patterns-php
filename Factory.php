<?php
require_once __DIR__ . '/vendor/autoload.php';

// simple factory
use \Kondrat\DesignPatterns\Factory\SimpleFactory\PizzaStore;
use \Kondrat\DesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;

// factory method
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStylePizzaStore;
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStylePizzaStore;
use \Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizzaStore;

// abstract factory

echo "<pre>";

echo "********* Simple Factory ************ \n";
$store = new PizzaStore( new SimplePizzaFactory() );
echo $store->orderPizza(PizzaStore::PIZZA_PEPPERONI);
echo "\n";
echo $store->orderPizza(PizzaStore::PIZZA_VEGGIE);
echo "\n";

echo "\n";
echo "********* Factory Method ************ \n";
$NYStore = new NYStylePizzaStore();
echo $NYStore->orderPizza(AbstractPizzaStore::PIZZA_CLAM);
echo "\n";
$ChicagoStore = new ChicagoStylePizzaStore();
echo $ChicagoStore->orderPizza(AbstractPizzaStore::PIZZA_PEPPERONI);
echo "\n";

echo "\n";
echo "********* Abstract Factory ************ \n";
