<?php
namespace App\Model;

class Labrador extends Dog
{

    public function display()
    {
        $display = "I'm a real Labrador.";
        $display .= " | Speaking: " . $this->speak();
        $display .= " | Walking: " . $this->walk();
        return $display;
    }
}