<?php
App::uses('ColoursProduct', 'Model');

/**
 * ColoursProduct Test Case
 *
 */
class ColoursProductTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.colours_product', 'app.product', 'app.colour', 'app.key', 'app.colours_key', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ColoursProduct = ClassRegistry::init('ColoursProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColoursProduct);

		parent::tearDown();
	}

}
