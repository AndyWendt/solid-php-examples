<?php
namespace SolidPhp\SingleResponsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\correct\BasketballCoach;

class BasketballCoachTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function is_only_a_coach()
    {
        $basketballCoach = new BasketballCoach();
        $this->assertInstanceOf(\SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach::class, $basketballCoach);
    }

}
