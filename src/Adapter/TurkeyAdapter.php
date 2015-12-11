<?php
namespace Kondrat\DesignPatterns\Adapter;

class TurkeyAdapter implements DuckInterface
{
    private $turkey;

    public function __construct(TurkeyInterface $t)
    {
        $this->turkey = $t;
    }
    
    public function quack()
    {
        return $this->turkey->gooble();
    }

    public function fly()
    {
        return implode("\n", [$this->turkey->fly(), $this->turkey->fly(), $this->turkey->fly()]);
    }
}