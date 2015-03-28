<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct;

use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Defense;
use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Offense;

class BasketballPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_implements_multiple_interfaces_because_the_responsibilities_are_different_for_each()
    {
        $basketballPlayer = new BasketballPlayer();
        $this->assertInstanceOf(Offense::class, $basketballPlayer);
        $this->assertInstanceOf(Defense::class, $basketballPlayer);
    }
}
