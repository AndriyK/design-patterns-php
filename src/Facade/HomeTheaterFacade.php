<?php
namespace Kondrat\DesignPatterns\Facade;

use Kondrat\DesignPatterns\Facade\Components As C;

class HomeTheaterFacade
{
    private $amplifier;
    private $dvdPlayer;
    private $projector;
    private $screen;

    public function __construct(C\Amplifier $a, C\DvdPlayer $d,  C\Projector $p, C\Screen $s)
    {
        $this->amplifier = $a;
        $this->dvdPlayer = $d;
        $this->projector = $p;
        $this->screen = $s;
    }

    public function watchMovie($title)
    {
        $res = "Get ready to watch a movie...\n";
        $res .= $this->screen->down();
        $res .= $this->projector->on();
        $res .= $this->projector->wideScreenMode();
        $res .= $this->amplifier->on();
        $res .= $this->amplifier->setDvd($this->dvdPlayer);
        $res .= $this->amplifier->setSurroundSound();
        $res .= $this->amplifier->setVolume(5);
        $res .= $this->dvdPlayer->on();
        $res .= $this->dvdPlayer->playMovie($title);
        return $res;
    }

    public function endMovie()
    {
        $res = "Shutting movie theater down...\n";
        $res .= $this->screen->up();
        $res .= $this->projector->off();
        $res .= $this->amplifier->off();
        $res .= $this->dvdPlayer->stop();
        $res .= $this->dvdPlayer->eject();
        $res .= $this->dvdPlayer->off();
        return $res;
    }
}