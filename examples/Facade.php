<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Facade\HomeTheaterFacade;
use \Kondrat\DesignPatterns\Facade\Components as C;

echo "<pre>";

$theater = new HomeTheaterFacade(new C\Amplifier(), new C\DvdPlayer(), new C\Projector(), new C\Screen());
echo $theater->watchMovie('Interstellar');
echo "\n";
echo $theater->endMovie();