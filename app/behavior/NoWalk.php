<?php
namespace App\Behavior;

class NoWalk implements WalkBehavior
{

    public function walk()
    {
        return "I can't walk!";
    }
}