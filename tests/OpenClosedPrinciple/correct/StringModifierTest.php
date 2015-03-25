<?php
namespace SolidPhp\OpenClosedPrinciple\correct;

use SolidPhp\OpenClosedPrinciple\correct\filters\BazFilter;
use SolidPhp\OpenClosedPrinciple\correct\filters\FooFilter;
use SolidPhp\OpenClosedPrinciple\correct\StringModifier;

class StringModifierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_modifies_strings_using_filters()
    {
        $string = 'foo baz';

        $stringModifier = new StringModifier();

        $expected = 'bar amazing';
        $actual = $stringModifier->modify(
            $string,
            [
                new BazFilter(),
                new FooFilter(),
            ]
        );

        $this->assertSame($expected, $actual);
    }
}
