<?php
App::uses('Key', 'Model');

/**
 * Key Test Case
 *
 */
class KeyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.key', 'app.colour', 'app.colours_key', 'app.product', 'app.colours_product', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Key = ClassRegistry::init('Key');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Key);

		parent::tearDown();
	}

}
