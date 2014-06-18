<?php
App::uses('AppController', 'Controller');
/**
 * BrandSubCatalogues Controller
 *
 * @property BrandSubCatalogue $BrandSubCatalogue
 */
class BrandSubCataloguesController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Sub Katalog Brand - Katalog');
		$this->set('page_katalog', 'sub katalog brand');
		
		if ($this->request->is('post')) {
			$search = $this->request->data['search'];
		} else {
			$search = null;
		}
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array(
        					'BrandSubCatalogue.id', 
        					'BrandSubCatalogue.name', 
        					'BrandSubCatalogue.publish', 
        					'BrandCatalogue.name'
							),
	    );
		$this->BrandSubCatalogue->recursive = 0;
		$this->set('brandSubCatalogues', $this->paginate('BrandSubCatalogue', array(
			'or'=> array(
			    array("BrandSubCatalogue.name LIKE" => '%'.$search.'%')
			)
			)));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Detail Sub Katalog Brand - Katalog');
		$this->set('page_katalog', 'sub katalog brand');
		
		$this->uses = array(
							'BrandSubCatalogue',
							'BrandCatalogue',
							'Brand'
							);
							
		$this->BrandSubCatalogue->id = $id;
		if (!$this->BrandSubCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand sub catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$brandSubCatalogue = $this->BrandSubCatalogue->read(null, $id);
		
		$this->BrandSubCatalogue->BrandCatalogue->recursive = -1;
		$brand = $this->BrandSubCatalogue->BrandCatalogue->find('first', array(
					'fields' => array('brand_id'),
					'joins' => array('LEFT JOIN brand_sub_catalogues AS BrandSubCatalogue ON(BrandCatalogue.id = BrandSubCatalogue.brand_catalogue_id)'),
					'conditions' => array(
										'BrandSubCatalogue.id' => $id
										)
				));
		$brands = $this->Brand->find('first', array(
					'recursive' => -1,
					'fields' => array('id', 'name'),
					'conditions' => array('Brand.id' => $brand['BrandCatalogue']['brand_id'])
					));
		
		$this->set(compact('brandSubCatalogue', 'brands'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Sub Katalog Brand - Katalog');
		$this->set('page_katalog', 'sub katalog brand');
		
		$this->uses = array(
							'BrandSubCatalogue',
							'BrandCatalogue',
							'Brand'
							);
		
		if ($this->request->is('post')) {
			$this->BrandSubCatalogue->create();
			if ($this->BrandSubCatalogue->save($this->request->data)) {
				$this->Session->setFlash(__('The brand sub catalogue has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand sub catalogue could not be saved. Please, try again.'), 'flash_error');
			}
		}
		
		$brands = $this->Brand->find('list');
		$brands['null'] = '-- Pilih Brand --';
		$brandCatalogues = array(
								'' => '-- Pilih Katalog Brand --'
								);
		$this->set(compact('brands', 'brandCatalogues'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Sub Katalog Brand - Katalog');
		$this->set('page_katalog', 'sub katalog brand');
		
		$this->uses = array(
							'BrandSubCatalogue',
							'BrandCatalogue',
							'Brand'
							);
		
		$this->BrandSubCatalogue->id = $id;
		if (!$this->BrandSubCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand sub catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BrandSubCatalogue->save($this->request->data)) {
				$this->Session->setFlash(__('The brand sub catalogue has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand sub catalogue could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->BrandSubCatalogue->read(null, $id);
		}
		
		$brands = $this->Brand->find('list');
		
		$this->BrandSubCatalogue->BrandCatalogue->recursive = -1;
		$brand = $this->BrandSubCatalogue->BrandCatalogue->find('first', array(
					'fields' => array('brand_id'),
					'joins' => array('LEFT JOIN brand_sub_catalogues AS BrandSubCatalogue ON(BrandCatalogue.id = BrandSubCatalogue.brand_catalogue_id)'),
					'conditions' => array(
										'BrandSubCatalogue.id' => $id
										)
				));
				
		$brandCatalogues = $this->BrandSubCatalogue->BrandCatalogue->find('list', array(
					'conditions' => array('BrandCatalogue.brand_id' => $brand['BrandCatalogue']['brand_id'])
					));
		$this->set(compact('brands', 'brand', 'brandCatalogues'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->BrandSubCatalogue->id = $id;
		if (!$this->BrandSubCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand sub catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->BrandSubCatalogue->delete()) {
			$this->Session->setFlash(__('Brand sub catalogue deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brand sub catalogue was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}

/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_brand_catalogue(){
		$brandCatalogues = $this->BrandSubCatalogue->BrandCatalogue->find('list', 
				array(
					'conditions' => array('BrandCatalogue.brand_id' => $_POST['brand_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Katalog Brand --'
							);
		foreach ($brandCatalogues as $key => $value) {
			$result[$i] = array(
							'id' => $key,
							'name' => $value
							);
			$i++;
		}

		$data = array(
				'data' => $result
				);
		echo json_encode($data);
		die;
	}
	
}
