<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Observer\WeatherStation;

$station = new WeatherStation();
$station->setWeatherConditions(60, 70, 50);

echo $station->showCurrentConditions();
echo "<br>";
echo $station->showForecast();
echo "<br>";
echo $station->showThirdPartyWidget();
$station->disableThirdPartyWidget();
echo "<br>";

echo "<br>";
echo "... weather has changed...and third party widget disabled...";
echo "<br>";
echo "<br>";

$station->setWeatherConditions(40, 40, 88);
echo $station->showCurrentConditions();
echo "<br>";
echo $station->showForecast();
echo "<br>";
echo $station->showThirdPartyWidget();
echo "<br>";



