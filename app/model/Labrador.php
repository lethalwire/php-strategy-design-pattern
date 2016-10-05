<?php
namespace App\Model;

use App\Behavior\Bark;
use App\Behavior\Walk;

/**
 * Class Labrador
 * @package App\Model
 *
 * A concrete implementation of the Dog class. This dog can walk on all four legs
 * barks when it speaks.
 */
class Labrador extends Dog
{

    /**
     * Labrador constructor. Defines the necessary behavior to speak and walk.
     */
    public function __construct() {
        $this->setSpeakBehavior(new Bark());
        $this->setWalkBehavior(new Walk());
    }

    /**
     * Speaks and walk.
     *
     * @return string
     * @see Dog::display()
     */
    public function display()
    {
        $display = "I'm a real Labrador.";
        $display .= " | Speaking: " . $this->speak();
        $display .= " | Walking: " . $this->walk();
        return $display;
    }
}