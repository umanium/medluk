<?php
App::uses('ColoursProductsController', 'Controller');

/**
 * TestColoursProductsController *
 */
class TestColoursProductsController extends ColoursProductsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ColoursProductsController Test Case
 *
 */
class ColoursProductsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.colours_product', 'app.product', 'app.brand', 'app.brand_catalogue', 'app.brand_sub_catalogue', 'app.category', 'app.category_sub', 'app.category_subs_product', 'app.colour', 'app.key', 'app.colours_key', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ColoursProducts = new TestColoursProductsController();
		$this->ColoursProducts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColoursProducts);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
