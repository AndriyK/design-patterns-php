<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class DvdPlayer
{
    private $title = '';

    public function on()
    {
        return __CLASS__ . " on.\n";
    }

    public function playMovie($title)
    {
        $this->title = $title;
        return __CLASS__ . " playing '{$this->title}'.\n";
    }

    public function stop()
    {
        return __CLASS__ . "stopped '{$this->title}'.\n";
    }

    public function eject()
    {
        return __CLASS__ . " eject.\n";
    }
    
    public function off()
    {
        return __CLASS__ . " off.\n";
    }
}