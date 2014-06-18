<?php
App::uses('BrandCatalogue', 'Model');

/**
 * BrandCatalogue Test Case
 *
 */
class BrandCatalogueTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brand_catalogue', 'app.brand', 'app.brand_sub_catalogue', 'app.product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BrandCatalogue = ClassRegistry::init('BrandCatalogue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BrandCatalogue);

		parent::tearDown();
	}

}
