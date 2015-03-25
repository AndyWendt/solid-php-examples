<?php
namespace SolidPhp\OpenClosedPrinciple\correct\filters;

class FooFilter implements Filter
{
    /**
     * Replaces bar with foo in string
     *
     * @param string $string
     * @return mixed
     */
    public function run($string)
    {
        return str_replace('foo', 'bar', $string);
    }
}
