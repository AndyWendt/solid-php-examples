<?php
namespace SolidPhp\SingleResponsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\correct\BasketballCoach;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Player;

class BasketballCoachTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BasketballCoach
     */
    protected $basketballCoach;

    protected function setUp()
    {
        parent::setUp();

        $this->basketballCoach = new BasketballCoach();
    }

    /**
     * @test
     */
    public function is_only_a_coach()
    {
        $this->assertInstanceOf(Coach::class, $this->basketballCoach);
        $this->assertNotInstanceOf(Player::class, $this->basketballCoach);
    }

    /**
     * @test
     */
    public function it_fulfills_all_interface_contracts()
    {
        $this->assertTrue(is_string($this->basketballCoach->leadTeam()));
        $this->assertTrue(is_string($this->basketballCoach->leadPractice()));
    }
}
