<?php
namespace App\Behavior;

class Bark implements SpeakBehavior
{

    public function speak()
    {
        return "Woof! Woof!";
    }
}