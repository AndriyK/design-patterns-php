<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class GarageDoorUpCommand implements CommandInterface
{
    private $garageDoor;

    function __construct(GarageDoor $door)
    {
        $this->garageDoor = $door;
    }

    public function execute()
    {
        return $this->garageDoor->up();
    }

    public function __toString()
    {
        return 'GarageDoorUpCommand';
    }

    public function undo()
    {
        return $this->garageDoor->down();
    }
}
