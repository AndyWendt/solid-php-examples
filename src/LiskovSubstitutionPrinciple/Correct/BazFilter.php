<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Correct;

use SolidPhp\LiskovSubstitutionPrinciple\Interfaces\Filter;

class BazFilter implements Filter
{

    /**
     * Runs a filter against the given array
     *
     * @param array $array
     * @return array
     */
    public function run(array $array)
    {
        $array = array_map(function ($value) {
            if ($value == 'baz') return 'yikes';
            return $value;
        },
        $array
        );

        return $array;
    }
}
