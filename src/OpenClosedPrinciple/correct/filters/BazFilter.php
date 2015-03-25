<?php
namespace SolidPhp\OpenClosedPrinciple\correct\filters;

class BazFilter implements Filter
{

    /**
     * Replaces baz with amazing in string
     *
     * @param string $string
     * @return string
     */
    public function run($string)
    {
        return str_replace('baz', 'amazing', $string);
    }
}
