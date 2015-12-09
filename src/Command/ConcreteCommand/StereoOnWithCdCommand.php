<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\Stereo;

class StereoOnWithCdCommand implements CommandInterface
{
    private $stereo;

    function __construct(Stereo $s)
    {
        $this->stereo = $s;
    }

    public function execute()
    {
        $res = $this->stereo->on();
        $res .= $this->stereo->setCd();
        $res .= $this->stereo->setVolume(10);
        return $res;
    }

    public function __toString()
    {
        return 'StereoOnWithCdCommand';
    }

    public function undo()
    {
        return $this->stereo->off();
    }
}
