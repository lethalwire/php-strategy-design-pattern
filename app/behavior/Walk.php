<?php
namespace App\Behavior;

class Walk implements WalkBehavior
{

    public function walk()
    {
        return "I'm walking on all four.";
    }
}