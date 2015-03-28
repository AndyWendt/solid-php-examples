<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Correct;

class BazFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_is_substitutable_for_its_base_type()
    {
        $bazFilter = new BazFilter();
        $actual = $bazFilter->run(['a', 'baz', 'filter']);

        // Return type should be array
        $this->assertTrue(is_array($actual));
        $this->assertContains('yikes', $actual);
    }
}
