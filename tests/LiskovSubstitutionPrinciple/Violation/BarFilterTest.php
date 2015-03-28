<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Violation;

class BarFilterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_throws_an_exception_so_its_preconditions_are_greater()
    {
        /*
         * Because we are expecting an exception to be thrown,
         * and the parent class does not have an @throws,
         * the preconditions are greater for the sub class
         * than for the parent.
         *
         * We can theoretically say that the exception is being
         * thrown because the array is empty and should raise an exceptional case.
         * But we read in the doc block for the interface that the consumer is expecting
         * an empty array to be returned regardless.
         */
        $this->setExpectedException(\Exception::class);

        $barFilter = new BarFilter();
        $actual = $barFilter->run([]);
    }

    /**
     * @test
     */
    public function it_sometimes_returns_a_string_so_it_cannot_be_substituted_for_the_base_type()
    {
        $barFilter = new BarFilter();
        $actual = $barFilter->run(['bar']);

        /*
         * The consumer of the Filter interface is going to be freaking out
         * if they have a string returned rather than an array in an implementing class.
         *
         * The Filter interface explicitly says @return array *not* @return array|string.
         *
         * This would absolutely blow up in the face of whomever used it.  It would
         * force them to hack in order to get it to work, eliminating the benefit of using
         * an interface.
         */
        $this->assertTrue(is_string($actual));
    }

}
