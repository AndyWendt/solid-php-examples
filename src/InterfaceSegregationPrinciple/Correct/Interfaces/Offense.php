<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces;

interface Offense
{
    /**
     * Try to score by shooting the ball while on offense
     *
     * @return bool
     */
    public function shoot();
}
