<?php
namespace App\Model;

use App\Behavior\Bark;
use App\Behavior\Walk;

class Labrador extends Dog
{

    public function __construct() {
        $this->setSpeakBehavior(new Bark());
        $this->setWalkBehavior(new Walk());
    }

    public function display()
    {
        $display = "I'm a real Labrador.";
        $display .= " | Speaking: " . $this->speak();
        $display .= " | Walking: " . $this->walk();
        return $display;
    }
}