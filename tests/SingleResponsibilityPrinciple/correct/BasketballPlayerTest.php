<?php
namespace SolidPhp\SingleResponsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\correct\BasketballPlayer;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Player;

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
    public function is_only_a_player()
    {
        $this->assertInstanceOf(Player::class, $this->basketballPlayer);
        $this->assertNotInstanceOf(Coach::class, $this->basketballPlayer);
    }

    /**
     * @test
     */
    public function it_fullfills_its_interface_contracts()
    {
        $this->assertTrue(is_string($this->basketballPlayer->play()));
        $this->assertTrue(is_string($this->basketballPlayer->practice()));
    }
}
