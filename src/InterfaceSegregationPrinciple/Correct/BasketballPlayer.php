<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct;

use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Defense;
use SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces\Offense;

class BasketballPlayer implements Offense, Defense
{

    /**
     * Block a shot by the offense
     *
     * @return void
     */
    public function block()
    {
        echo 'You have been blocked';
    }

    /**
     * Try to score by shooting the ball while on offense
     *
     * @return void
     */
    public function shoot()
    {
        echo 'Nothing but net...';
    }
}
