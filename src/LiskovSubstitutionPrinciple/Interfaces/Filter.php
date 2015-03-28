<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Interfaces;

interface Filter
{
    /**
     * Runs a filter against the given array.
     * If the input array is empty, it should return an empty array.
     *
     * @param array $array
     * @return array
     */
    public function run(array $array);
}
