<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Amplifier
{
    public function on()
    {
        return __CLASS__ . " on.\n";
    }

    public function setDvd(DvdPlayer $d)
    {
        return __CLASS__ . " setting " . get_class($d) . " to Top-o-Line\n";
    }

    public function setSurroundSound()
    {
        return __CLASS__ . " surround sound on (5 speakers, 1 sub)\n";
    }

    public function setVolume($level)
    {
        return __CLASS__ . " setting volume to $level\n";
    }

    public function off()
    {
        return __CLASS__ . " off.\n";
    }
}