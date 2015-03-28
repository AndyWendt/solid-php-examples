<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Violation\Interfaces;

interface Player
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
}
