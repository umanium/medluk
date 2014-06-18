<?php
App::uses('Colour', 'Model');

/**
 * Colour Test Case
 *
 */
class ColourTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.colour', 'app.key', 'app.colours_key', 'app.product', 'app.colours_product', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Colour = ClassRegistry::init('Colour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Colour);

		parent::tearDown();
	}

}
