<?php
App::uses('CategorySubsProduct', 'Model');

/**
 * CategorySubsProduct Test Case
 *
 */
class CategorySubsProductTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.category_subs_product', 'app.category_sub', 'app.category', 'app.product', 'app.brand_sub_catalogue', 'app.brand_catalogue', 'app.brand', 'app.selling_unit', 'app.colour', 'app.key', 'app.colours_key', 'app.colours_product', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategorySubsProduct = ClassRegistry::init('CategorySubsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategorySubsProduct);

		parent::tearDown();
	}

}
