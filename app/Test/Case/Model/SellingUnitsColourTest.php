<?php
App::uses('SellingUnitsColour', 'Model');

/**
 * SellingUnitsColour Test Case
 *
 */
class SellingUnitsColourTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.selling_units_colour', 'app.selling_unit', 'app.colour', 'app.key', 'app.colours_key', 'app.product', 'app.brand', 'app.brand_catalogue', 'app.brand_sub_catalogue', 'app.category', 'app.category_sub', 'app.category_subs_product', 'app.colours_product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SellingUnitsColour = ClassRegistry::init('SellingUnitsColour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SellingUnitsColour);

		parent::tearDown();
	}

}
