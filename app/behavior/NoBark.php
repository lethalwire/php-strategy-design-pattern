<?php
namespace App\Behavior;

class NoBark implements SpeakBehavior
{

    public function speak()
    {
        return "I don't speak!";
    }
}