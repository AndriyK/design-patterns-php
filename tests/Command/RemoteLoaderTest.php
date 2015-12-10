<?php
use \Kondrat\DesignPatterns\Command\RemoteLoader;

class RemoteLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testGetConfiguredRemoteControl()
    {
        $control = RemoteLoader::getConfiguredRemoteControl();

        // kitchen light
        $this->assertEquals("Light in Kitchen is on.\n", $control->onButtonPushed(1));
        $this->assertEquals("Light in Kitchen is off.\n", $control->offButtonPushed(1));

        // macro command
        $this->assertEquals("Light in Living Room is off.\nStereo if off.\n", $control->offButtonPushed(5));        
    }

}