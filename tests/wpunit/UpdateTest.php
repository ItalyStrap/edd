<?php

class UpdateTest extends \Codeception\TestCase\WPTestCase
{
    /**
     * @var \WpunitTester
     */
    protected $tester;

    public function setUp(): void
    {
        // Before...
        parent::setUp();

        // Your set up methods here.
    }

    public function tearDown(): void
    {
        // Your tear down methods here.

        // Then...
        parent::tearDown();
    }

	private function getInstance( $args = array(), $strings = array() ) {
		$sut = new \ItalyStrap\EDD\Theme\Updater( $args, $strings);
		$this->assertInstanceOf( \ItalyStrap\EDD\Theme\Updater::class, $sut, '' );
		return $sut;
	}

	/**
	 * @test
	 */
	public function itShouldBeInstantiable()
	{
		$sut = $this->getInstance();
	}
}
