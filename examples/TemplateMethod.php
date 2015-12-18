<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\TemplateMethod\Coffee;
use \Kondrat\DesignPatterns\TemplateMethod\Tea;

$coffee = new Coffee();
$tea = new Tea();

echo "<pre>";

echo "Preparing coffee...\n";
echo $coffee->prepareReceipe();

echo "\n\n";

echo "Preparing tea...\n";
echo $tea->prepareReceipe();
