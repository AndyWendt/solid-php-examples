<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation;

use SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces\Basketball;

class BasketballPlayer implements Basketball
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

    /**
     * Echos out some string of profanities
     *
     * @return string
     */
    public function yellAtPlayersLikeBobbyKnight()
    {
        return 'This has been censored because of inappropriate content';
    }
}
