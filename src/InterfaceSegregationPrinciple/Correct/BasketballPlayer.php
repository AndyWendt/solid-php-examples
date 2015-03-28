<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct;

use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Defense;
use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Offense;

class BasketballPlayer implements Offense, Defense
{

    /**
     * Block a shot by the offense
     *
     * @return bool
     */
    public function block()
    {
        return $this->randomBool();
    }

    /**
     * Try to score by shooting the ball while on offense
     *
     * @return bool
     */
    public function shoot()
    {
        return $this->randomBool();
    }

    protected function randomBool()
    {
        return (bool) rand(0,1);
    }
}
