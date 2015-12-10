<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Kondrat\DesignPatterns\Command\RemoteLoader;

$control = RemoteLoader::getConfiguredRemoteControl();

echo "<pre>";
echo "**** RemoteControl just after configuration ****\n";
echo $control;
echo "\n\n";
echo "**** Pressing buttons one by one ****\n";
echo "\n\tslot 0:\n";
echo "on: " . $control->onButtonPushed(0);
echo "off: " . $control->offButtonPushed(0);
echo "\n\tslot 1:\n";
echo "on: " . $control->onButtonPushed(1);
echo "off: " . $control->offButtonPushed(1);
echo "\n\tslot 2:\n";
echo "on: " . $control->onButtonPushed(2);
echo "off: " . $control->offButtonPushed(2);
echo "undo: " . $control->undoButtonPushed();
echo "\n\tslot 3:\n";
echo "on: " . $control->onButtonPushed(3);
echo "off: " . $control->offButtonPushed(3);
echo "\n\tslot 4:\n";
echo "on: " . $control->onButtonPushed(4);
echo "off: " . $control->offButtonPushed(4);
echo "\n\tslot 5:\n";
echo "on: " . $control->onButtonPushed(5);
echo "off: " . $control->offButtonPushed(5);
echo "\n\tslot 6:\n";
echo "on: " . $control->onButtonPushed(6);
echo "off: " . $control->offButtonPushed(6);
