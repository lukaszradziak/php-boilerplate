<?php

namespace App;

class Car
{
    /**
     * Speed of car
     * @var int
     */
    public $speed = 0;

    /**
     * Move car
     * @return void 
     */
    public function accelerate()
    {
        $this->speed++;
    }
}
