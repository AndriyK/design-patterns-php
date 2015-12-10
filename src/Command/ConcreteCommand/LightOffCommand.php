<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\Light;

class LightOffCommand implements CommandInterface
{
    private $light;

    function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->off();
    }

    public function __toString()
    {
        return 'LightOffCommand';
    }

    public function undo()
    {
        return $this->light->on();
    }
}
