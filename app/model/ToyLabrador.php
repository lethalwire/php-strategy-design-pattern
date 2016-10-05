<?php
namespace App\Model;

use App\Behavior\NoBark;
use App\Behavior\NoWalk;

class ToyLabrador extends Dog
{

    public function __construct() {
        parent::setSpeakBehavior( new NoBark() );
        parent::setWalkBehavior( new NoWalk() );
    }

    public function display()
    {
        $display = "I'm a Toy Labrador.";
        $display .= " | Speaking: " . $this->speak();
        $display .= " | Walking: " . $this->walk();
        return $display;
    }
}
