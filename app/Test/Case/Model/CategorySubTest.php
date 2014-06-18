<?php
App::uses('CategorySub', 'Model');

/**
 * CategorySub Test Case
 *
 */
class CategorySubTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.category_sub', 'app.category', 'app.product', 'app.category_subs_product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategorySub = ClassRegistry::init('CategorySub');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategorySub);

		parent::tearDown();
	}

}
