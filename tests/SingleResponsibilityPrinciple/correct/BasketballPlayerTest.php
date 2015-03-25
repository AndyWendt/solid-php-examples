<?php
namespace SolidPhp\SingleResponsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\correct\BasketballPlayer;

class BasketballPlayerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function is_only_a_player()
    {
        $basketballCoach = new BasketballPlayer();
        $this->assertInstanceOf(\SolidPhp\SingleResonsibilityPrinciple\interfaces\Player::class, $basketballCoach);
    }

}
