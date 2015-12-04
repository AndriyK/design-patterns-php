<?php
namespace Kondrat\DesignPatterns\Command\Receiver;

class CeilingFan
{
    public function low()
    {
        return "Ceiling fan is turn with low speed.\n";
    }

    public function medium()
    {
        return "Ceiling fan is turn with medium speed.\n";
    }

    public function high()
    {
        return "Ceiling fan is turn with high speed.\n";
    }

    public function off()
    {
        return "Ceiling fan is turn off.\n";
    }
}