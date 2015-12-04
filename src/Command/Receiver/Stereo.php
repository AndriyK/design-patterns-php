<?php
namespace Kondrat\DesignPatterns\Command\Receiver;

class Stereo
{
    public function on()
    {
        return "Stereo is on.\n";
    }

    public function off()
    {
        return "Stereo if off.\n";
    }

    public function setCd()
    {
        return "CD is inserted.\n";
    }

    public function setVolume($level)
    {
        return "Volume set to level {$level}.\n";
    }
}