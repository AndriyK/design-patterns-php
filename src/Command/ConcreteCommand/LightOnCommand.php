<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\Light;

class LightOnCommand implements CommandInterface
{
    private $light;

    function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->on();
    }

    public function __toString()
    {
        return 'LightOnCommand';
    }

    public function undo()
    {
        return $this->light->off();
    }
}
