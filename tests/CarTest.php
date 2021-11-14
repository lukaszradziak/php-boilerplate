<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Car;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use PHPUnit\Framework\ExpectationFailedException;

class CarTest extends TestCase
{
    /**
     * 
     * @return void 
     * @throws InvalidArgumentException 
     * @throws ExpectationFailedException 
     */
    public function test_move_car()
    {
        $car = new Car;
        $car->accelerate();
        $this->assertEquals(1, $car->speed);
    }
}
