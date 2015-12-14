<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Screen
{
    public function on()
    {
        return __CLASS__ . " on.\n";
    }

    public function wideScreenMode()
    {
        return __CLASS__ . " in widescreen mode (16x9).\n";
    }

    public function off()
    {
        return __CLASS__ . " off.\n";
    }
}