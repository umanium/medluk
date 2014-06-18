<?php
App::uses('SellingUnit', 'Model');

/**
 * SellingUnit Test Case
 *
 */
class SellingUnitTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.selling_unit', 'app.colour', 'app.key', 'app.colours_key', 'app.product', 'app.brand', 'app.brand_catalogue', 'app.brand_sub_catalogue', 'app.category', 'app.category_sub', 'app.category_subs_product', 'app.colours_product', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SellingUnit = ClassRegistry::init('SellingUnit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SellingUnit);

		parent::tearDown();
	}

}
