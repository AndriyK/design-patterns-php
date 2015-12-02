<?php
namespace Kondrat\DesignPatterns\Singleton;

class ChocolateBoiler
{
    private static $instance = null;

    private $empty;
    private $boiled;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(){
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() and $this->isBoiled()) {
            $this->empty = true;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() and !$this->isBoiled()) {
            $this->boiled = true;
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}