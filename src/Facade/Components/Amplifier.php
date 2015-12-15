<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Amplifier
{
    private $name = 'Amplifier';

    public function on()
    {
        return "{$this->name} on.\n";
    }

    public function setDvd(DvdPlayer $d)
    {
        return "{$this->name} setting " . get_class($d) . " to Top-o-Line\n";
    }

    public function setSurroundSound()
    {
        return "{$this->name} surround sound on (5 speakers, 1 sub)\n";
    }

    public function setVolume($level)
    {
        return "{$this->name} setting volume to $level\n";
    }

    public function off()
    {
        return "{$this->name} off.\n";
    }
}