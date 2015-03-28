<?php
namespace SolidPhp\SingleResponsibilityPrinciple\violation;

use SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Player;
use SolidPhp\SingleResonsibilityPrinciple\violation\BasketballPlayerAndCoach;

class BasketballPlayerAndCoachTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BasketballPlayerAndCoach
     */
    protected $basketballPlayerAndCoach;

    protected function setUp()
    {
        parent::setUp();

        $this->basketballPlayerAndCoach = new BasketballPlayerAndCoach();
    }


    /**
     * @test
     */
    public function is_both_a_player_and_a_coach_violating_srp()
    {
        $this->assertInstanceOf(Player::class, $this->basketballPlayerAndCoach);
        $this->assertInstanceOf(Coach::class, $this->basketballPlayerAndCoach);
    }

    /**
     * @test
     */
    public function it_fullfills_its_interface_contracts()
    {
        $this->assertString($this->basketballPlayerAndCoach->leadTeam());
        $this->assertString($this->basketballPlayerAndCoach->leadPractice());
        $this->assertString($this->basketballPlayerAndCoach->play());
        $this->assertString($this->basketballPlayerAndCoach->practice());
    }

    /**
     * @param mixed $result
     */
    protected function assertString($result)
    {
        $this->assertTrue(is_string($result));
    }
}
