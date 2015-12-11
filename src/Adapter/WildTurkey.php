<?php
namespace Kondrat\DesignPatterns\Adapter;

class WildTurkey implements TurkeyInterface
{
    public function gooble()
    {
        return "Gooble gooble";
    }

    public function fly()
    {
        return "I am flying a short distance";
    }
}