<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct;

use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Coach;
use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Defense;
use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Offense;

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
    public function it_implements_multiple_interfaces_because_the_responsibilities_are_different_for_each()
    {
        /*
         * The player can play offense and defense
         */
        $this->assertInstanceOf(Offense::class, $this->basketballPlayer);
        $this->assertInstanceOf(Defense::class, $this->basketballPlayer);

        /*
         * The player does not have the responsibilities of a coach.
         */
        $this->assertNotInstanceOf(Coach::class, $this->basketballPlayer);
    }

    /**
     * @test
     */
    public function it_fulfills_all_of_its_contracts()
    {
        $this->assertTrue(is_bool($this->basketballPlayer->block()), 'The player can block');
        $this->assertTrue(is_bool($this->basketballPlayer->shoot()), 'The player can shoot');
    }
}
