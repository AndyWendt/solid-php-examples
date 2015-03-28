<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation;

use SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces\Player;

class BasketballPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_uses_one_interface_for_multiple_responsibilities()
    {
        $basketballPlayer = new BasketballPlayer();
        $this->assertInstanceOf(Player::class, $basketballPlayer);
    }
}
