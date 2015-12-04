<?php
namespace Kondrat\DesignPatterns\Command;

use Kondrat\DesignPatterns\Command\ConcreteCommand\CeilingFanOnCommand;
use Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorUpCommand;
use Kondrat\DesignPatterns\Command\ConcreteCommand\LightOffCommand;
use Kondrat\DesignPatterns\Command\ConcreteCommand\LightOnCommand;
use Kondrat\DesignPatterns\Command\ConcreteCommand\StereoOnWithCdCommand;
use Kondrat\DesignPatterns\Command\Receiver\CeilingFan;
use Kondrat\DesignPatterns\Command\Receiver\GarageDoor;
use Kondrat\DesignPatterns\Command\Receiver\Light;
use Kondrat\DesignPatterns\Command\Receiver\Stereo;

class RemoteLoader
{
    public static function getConfiguredRemoteControl()
    {
        $remoteControl = new RemoteControl();

        $livingRoomLight = new Light('Living Room');
        $kitchenLight = new Light('Kitchen');
        $ceilingFan = new CeilingFan();
        $garageDoor = new GarageDoor();
        $stereo = new Stereo();

        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $kitchenLightOn = new LightOnCommand($kitchenLight);
        $kitchenLightOff = new LightOffCommand($kitchenLight);

        $ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $garageDoorUp = new GarageDoorUpCommand($garageDoor);
        $garageDoorDown = new GarageDoordownCommand($garageDoor);

        $stereoOnWithCd = new StereoOnWithCdCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
        $remoteControl->setCommand(3, $garageDoorUp, $garageDoorDown);
        $remoteControl->setCommand(4, $stereoOnWithCd, $stereoOff);

        return $remoteControl;
    }
}