<?php
namespace SolidPhp\OpenClosedPrinciple\violation;

class StringModifier
{
    /**
     * Modifies strings
     *
     * @param $string
     * @return string
     */
    public function modify($string)
    {
        $string = str_replace('baz', 'amazing', $string);
        $string = str_replace('foo', 'bar', $string);

        return $string;
    }
}
