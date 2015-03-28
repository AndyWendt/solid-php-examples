<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation;

use SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces\Basketball;
use SolidPhp\InterfaceSegregationPrinciple\Violation\BasketballBasketball;

class BasketballPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BasketballPlayer
     */
    protected $basketballPlayer;

    protected function setUp()
    {
        parent::setUp();

        $this->basketballPlayer = new BasketballPlayer();
    }


    /**
     * @test
     */
    public function it_uses_one_interface_for_multiple_responsibilities()
    {
        $this->assertInstanceOf(Basketball::class, $this->basketballPlayer);
    }

    /**
     * @test
     */
    public function it_fulfills_all_of_its_contracts()
    {
        $this->assertTrue(is_bool($this->basketballPlayer->block()), 'The player can block');
        $this->assertTrue(is_bool($this->basketballPlayer->shoot()), 'The player can shoot');
        $this->assertTrue(is_string($this->basketballPlayer->yellAtPlayersLikeBobbyKnight()), 'The player is also a coach evidently');
    }
}
