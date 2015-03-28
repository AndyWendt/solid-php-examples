<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation;

use SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces\Player;

class BasketballPlayer implements Player
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
