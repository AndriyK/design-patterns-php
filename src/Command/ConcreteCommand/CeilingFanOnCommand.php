<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\CeilingFan;

class CeilingFanOnCommand implements CommandInterface
{
    private $fan;

    function __construct(CeilingFan $f)
    {
        $this->fan = $f;
    }

    public function execute()
    {
        return $this->fan->high();
    }

    public function __toString()
    {
        return 'CeilingFanOnCommand';
    }

    public function undo()
    {
        return $this->fan->off();
    }
}
