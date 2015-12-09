<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\CeilingFan;

class CeilingFanOffCommand implements CommandInterface
{
    private $fan;

    function __construct(CeilingFan $f)
    {
        $this->fan = $f;
    }

    public function execute()
    {
        return $this->fan->off();
    }

    public function __toString()
    {
        return 'CeilingFanOffCommand';
    }

    public function undo()
    {
        return $this->fan->high();
    }
}
