<?php
namespace SolidPhp\OpenClosedPrinciple\correct;

use SolidPhp\OpenClosedPrinciple\correct\filters\Filter;

class StringModifier
{
    /**
     * Modifies strings using Filters
     *
     * @param string $string
     * @param Filter[] $filters
     * @return string
     */
    public function modify($string, array $filters)
    {
        foreach ($filters as $filter) {
            $string = $filter->run($string);
        }

        return $string;
    }
}
