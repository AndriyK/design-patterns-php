<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class GarageDoorDownCommand implements CommandInterface
{
    private $garageDoor;

    function __construct(GarageDoor $door)
    {
        $this->garageDoor = $door;
    }

    public function execute()
    {
        return $this->garageDoor->down();
    }

    public function __toString()
    {
        return 'GarageDoorDownCommand';
    }

    public function undo()
    {
        return '';
    }
}
