<?php
namespace SolidPhp\SingleResponsibilityPrinciple\violation;

class BasketballPlayerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function is_both_a_player_and_a_coach_violating_srp()
    {
        $basketBallPlayerAndCoach = new \SolidPhp\SingleResonsibilityPrinciple\violation\BasketballPlayerAndCoach();
        $this->assertInstanceOf(\SolidPhp\SingleResonsibilityPrinciple\interfaces\Player::class, $basketBallPlayerAndCoach);
        $this->assertInstanceOf(\SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach::class, $basketBallPlayerAndCoach);
    }

}
