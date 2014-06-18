<?php
App::uses('AppController', 'Controller');
/**
 * BrandCatalogues Controller
 *
 * @property BrandCatalogue $BrandCatalogue
 */
class BrandCataloguesController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Katalog Brand - Katalog');
		$this->set('page_katalog', 'katalog brand');
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array('BrandCatalogue.id', 'BrandCatalogue.name', 'BrandCatalogue.publish', 'Brand.name'),
	    );
		$this->BrandCatalogue->recursive = 0;
		$this->set('brandCatalogues', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Detail Katalog Brand - Katalog');
		$this->set('page_katalog', 'katalog brand');
		
		$this->BrandCatalogue->id = $id;
		if (!$this->BrandCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('brandCatalogue', $this->BrandCatalogue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Katalog Brand - Katalog');
		$this->set('page_katalog', 'katalog brand');
		
		if ($this->request->is('post')) {
			$this->BrandCatalogue->create();
			
			if ($this -> request -> data['BrandCatalogue']['pict']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['BrandCatalogue']['pict']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['BrandCatalogue']['pict']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['BrandCatalogue']['pict'];
				$this -> request -> data['BrandCatalogue']['pict'] = $unique_name;
			} else {
				$this -> request -> data['BrandCatalogue']['pict'] = null;
			}
			
			if ($this->BrandCatalogue->save($this->request->data)) {
				
				if($this -> request -> data['BrandCatalogue']['pict']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/katalog brand', $temp);
					//$this->Image->remove_file($gbr_dulu, 'img/sub kategori');
				}
				
				$this->Session->setFlash(__('The brand catalogue has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand catalogue could not be saved. Please, try again.'), 'flash_error');
			}
		}
		$brands = $this->BrandCatalogue->Brand->find('list');
		$this->set(compact('brands'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Katalog Brand - Katalog');
		$this->set('page_katalog', 'katalog brand');
		
		$this->BrandCatalogue->id = $id;
		if (!$this->BrandCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['BrandCatalogue']['pict_baru']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['BrandCatalogue']['pict_baru']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['BrandCatalogue']['pict_baru']['tmp_name'];
				$gbr_dulu = $this -> request -> data['BrandCatalogue']['pict'];
				$this -> request -> data['BrandCatalogue']['pict'] = $unique_name;
			} else {
				$this -> request -> data['BrandCatalogue']['pict_baru'] = null;
			}
			
			if ($this->BrandCatalogue->save($this->request->data)) {
				
				if($this -> request -> data['BrandCatalogue']['pict_baru']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/katalog brand', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/katalog brand');
				}
				
				$this->Session->setFlash(__('The brand catalogue has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand catalogue could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->BrandCatalogue->read(null, $id);
		}
		$brands = $this->BrandCatalogue->Brand->find('list');
		$this->set(compact('brands'));
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
		$data = $this->BrandCatalogue->find('first', array('conditions' => array('BrandCatalogue.id' => $id), 'fields' => array('BrandCatalogue.pict')));
		$this->BrandCatalogue->id = $id;
		if (!$this->BrandCatalogue->exists()) {
			$this->Session->setFlash('Invalid brand catalogue', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->BrandCatalogue->delete()) {
			
			if($data['BrandCatalogue']['pict']){
				$this->Image->remove_file($data['BrandCatalogue']['pict'], 'img/katalog brand');
			}
			
			$this->Session->setFlash(__('Brand catalogue deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brand catalogue was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
