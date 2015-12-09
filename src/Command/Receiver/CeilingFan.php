<?php
namespace Kondrat\DesignPatterns\Command\Receiver;

class CeilingFan
{
    public function high()
    {
        return "Ceiling fan is turn with high speed.\n";
    }

    public function off()
    {
        return "Ceiling fan is turn off.\n";
    }
}