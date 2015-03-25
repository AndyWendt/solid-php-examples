<?php
namespace SolidPhp\OpenClosedPrinciple\violation;

class StringModifierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_modifies_strings()
    {
        $string = 'foo baz';

        $stringModifier = new StringModifier();

        $expected = 'bar amazing';
        $actual = $stringModifier->modify($string);

        $this->assertSame($expected, $actual);
    }
}
