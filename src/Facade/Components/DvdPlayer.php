<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class DvdPlayer
{
    private $name = 'DvdPlayer';
    private $title = '';

    public function on()
    {
        return "{$this->name} on.\n";
    }

    public function playMovie($title)
    {
        $this->title = $title;
        return "{$this->name} playing '{$this->title}'.\n";
    }

    public function stop()
    {
        return "{$this->name} stopped '{$this->title}'.\n";
    }

    public function eject()
    {
        return "{$this->name} eject.\n";
    }
    
    public function off()
    {
        return "{$this->name} off.\n";
    }
}