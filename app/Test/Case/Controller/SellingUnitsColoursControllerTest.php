<?php
App::uses('SellingUnitsColoursController', 'Controller');

/**
 * TestSellingUnitsColoursController *
 */
class TestSellingUnitsColoursController extends SellingUnitsColoursController {
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
 * SellingUnitsColoursController Test Case
 *
 */
class SellingUnitsColoursControllerTestCase extends CakeTestCase {
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
		$this->SellingUnitsColours = new TestSellingUnitsColoursController();
		$this->SellingUnitsColours->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SellingUnitsColours);

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
