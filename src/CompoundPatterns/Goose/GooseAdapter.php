<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Goose;

use Kondrat\DesignPatterns\CompoundPatterns\Duck\AbstractDuck;
use Kondrat\DesignPatterns\CompoundPatterns\Observable;

class GooseAdapter extends AbstractDuck
{
    private $goose;

    public function __construct(Goose $g)
    {
        parent::__construct();
        $this->goose = $g;
    }

    public function quack()
    {
        echo $this->goose->honk();
        $this->notifyObservers();
    }
}