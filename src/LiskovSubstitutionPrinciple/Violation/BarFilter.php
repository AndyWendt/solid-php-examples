<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Violation;

use SolidPhp\LiskovSubstitutionPrinciple\Interfaces\Filter;

class BarFilter implements Filter
{

    /**
     * Runs a filter against the given array
     *
     * @param array $array
     * @return array|string
     * @throws \Exception
     */
    public function run(array $array)
    {
        if (empty($array)) throw new \Exception('empty array');

        foreach ($array as $value) {
            if ($value == 'bar') return 'yikes';
        }

        return $array;
    }
}
