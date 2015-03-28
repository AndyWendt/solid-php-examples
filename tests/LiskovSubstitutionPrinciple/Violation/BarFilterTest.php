<?php
namespace SolidPhp\LiskovSubstitutionPrinciple\Violation;

class BarFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BarFilter
     */
    protected $barFilter;

    protected function setUp()
    {
        parent::setUp();

        $this->barFilter = new BarFilter();
    }


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

        $this->barFilter->run([]);
    }

    /**
     * @test
     */
    public function it_sometimes_returns_a_string_so_it_cannot_be_substituted_for_the_base_type()
    {
        $actual = $this->barFilter->run(['bar']);

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

    /**
     * @test
     */
    public function it_sometimes_returns_an_array()
    {
        $actual = $this->barFilter->run(['test']);

        /*
         * This would drive you certifiably nuts receiving an array
         * sometimes and string others and then other times being greeted
         * by an exception you could not see coming.
         */
        $this->assertContains('test', $actual);
    }
}
