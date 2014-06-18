<?php
App::uses('BrandSubCataloguesController', 'Controller');

/**
 * TestBrandSubCataloguesController *
 */
class TestBrandSubCataloguesController extends BrandSubCataloguesController {
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
 * BrandSubCataloguesController Test Case
 *
 */
class BrandSubCataloguesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brand_sub_catalogue', 'app.brand', 'app.brand_catalogue', 'app.product', 'app.category', 'app.category_sub', 'app.category_subs_product', 'app.colour', 'app.key', 'app.colours_key', 'app.colours_product', 'app.selling_unit', 'app.selling_units_colour');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BrandSubCatalogues = new TestBrandSubCataloguesController();
		$this->BrandSubCatalogues->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BrandSubCatalogues);

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
