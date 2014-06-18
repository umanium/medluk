<?php
App::uses('ColoursKey', 'Model');

/**
 * ColoursKey Test Case
 *
 */
class ColoursKeyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.colours_key', 'app.colour', 'app.key', 'app.product', 'app.colours_product', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ColoursKey = ClassRegistry::init('ColoursKey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColoursKey);

		parent::tearDown();
	}

}
