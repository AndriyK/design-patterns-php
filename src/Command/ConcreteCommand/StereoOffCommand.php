<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

use Kondrat\DesignPatterns\Command\Receiver\Stereo;

class StereoOffCommand implements CommandInterface
{
    private $stereo;

    function __construct(Stereo $s)
    {
        $this->stereo = $s;
    }

    public function execute()
    {
        return $this->stereo->off();
    }

    public function __toString()
    {
        return 'StereoOffCommand';
    }

    public function undo()
    {
        $res = $this->stereo->on();
        $res .= $this->stereo->setCd();
        $res .= $this->stereo->setVolume(10);
        return $res;
    }
}
