<?php
namespace SolidPhp\InterfaceSegregationPrinciple\Correct\Interfaces;

interface Defense
{
    /**
     * Block a shot by the offense
     *
     * @return bool
     */
    public function block();
}
