<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces;

interface Basketball
{
    /**
     * Try to score by shooting the ball while on offense
     *
     * @return void
     */
    public function shoot();

    /**
     * Block a shot by the offense
     *
     * @return void
     */
    public function block();

    /**
     * Echos out some string of profanities
     *
     * @return void there is no return when you play for Bobby Knight
     */
    public function yellAtPlayersLikeBobbyKnight();
}
