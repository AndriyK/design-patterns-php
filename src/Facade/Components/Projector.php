<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Projector
{
    private $name = "Projector";

    public function on()
    {
        return "{$this->name} on.\n";
    }

    public function wideScreenMode()
    {
        return "{$this->name} in widescreen mode (16x9).\n";
    }

    public function off()
    {
        return "{$this->name} off.\n";
    }

}