<?php
App::uses('BrandSubCatalogue', 'Model');

/**
 * BrandSubCatalogue Test Case
 *
 */
class BrandSubCatalogueTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brand_sub_catalogue', 'app.brand', 'app.brand_catalogue', 'app.product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BrandSubCatalogue = ClassRegistry::init('BrandSubCatalogue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BrandSubCatalogue);

		parent::tearDown();
	}

}
