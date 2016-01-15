<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Goose;

use Kondrat\DesignPatterns\CompoundPatterns\QuackableInterface;

class GooseAdapter implements QuackableInterface
{
    private $goose;

    public function __construct(Goose $g)
    {
        $this->goose = $g;
    }

    public function quack()
    {
        return $this->goose->honk();
    }
}