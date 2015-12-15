<?php
use \Kondrat\DesignPatterns\Facade\HomeTheaterFacade;
use \Kondrat\DesignPatterns\Facade\Components as C;

class HomeTheaterFacadeTest extends PHPUnit_Framework_TestCase
{
    protected $theater;

    protected function setUp()
    {
        $this->theater = new HomeTheaterFacade(new C\Amplifier(), new C\DvdPlayer(), new C\Projector(), new C\Screen());
    }

    public function testWatchMovie()
    {
        $expected = "Get ready to watch a movie...\n";
        $expected .= "Screen going down.\n";
        $expected .= "Projector on.\n";
        $expected .= "Projector in widescreen mode (16x9).\n";
        $expected .= "Amplifier on.\n";
        $expected .= "Amplifier setting Kondrat\\DesignPatterns\\Facade\\Components\\DvdPlayer to Top-o-Line\n";
        $expected .= "Amplifier surround sound on (5 speakers, 1 sub)\n";
        $expected .= "Amplifier setting volume to 5\n";
        $expected .= "DvdPlayer on.\n";
        $expected .= "DvdPlayer playing 'Titanic'.\n";

        $this->assertEquals($expected, $this->theater->watchMovie('Titanic'));
    }

    public function testEndMovie()
    {
        $expected = "Shutting movie theater down...\n";
        $expected .= "Screen going up.\n";
        $expected .= "Projector off.\n";
        $expected .= "Amplifier off.\n";
        $expected .= "DvdPlayer stopped ''.\n";
        $expected .= "DvdPlayer eject.\n";
        $expected .= "DvdPlayer off.\n";

        $this->assertEquals($expected, $this->theater->endMovie());
    }
}