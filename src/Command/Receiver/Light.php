<?php
namespace Kondrat\DesignPatterns\Command\Receiver;

class Light
{
    private $room;

    public function __construct($room)
    {
        $this->room = $room;
    }

    public function on()
    {
        return "Light in {$this->room} is on.\n";
    }

    public function off()
    {
        return "Light in {$this->room} is off.\n";
    }
}