<?php
namespace SolidPhp\OpenClosedPrinciple\correct\filters;

interface Filter
{
    /**
     * @param string $string
     * @return string
     */
    public function run($string);
}
