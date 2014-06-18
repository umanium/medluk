<?php
App::uses('AppController', 'Controller');
/**
 * Brands Controller
 *
 * @property Brand $Brand
 */
class BrandsController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Brand - Katalog');
		$this->set('page_katalog', 'brand');
		
		if ($this->request->is('post')) {
			$search = $this->request->data['search'];
		} else {
			$search = null;
		}
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array('Brand.id', 'Brand.name', 'Brand.publish'),
	    );
		$this->Brand->recursive = -1;
		$this->set('brands', $this->paginate('Brand', array(
			'or'=> array(
			    array("Brand.name LIKE" => '%'.$search.'%')
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
		$this->set('title_for_layout', 'Detail Brand - Katalog');
		$this->set('page_katalog', 'brand');
		
		$this->Brand->id = $id;
		if (!$this->Brand->exists()) {
			$this->Session->setFlash('Invalid brand', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('brand', $this->Brand->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Brand - Katalog');
		$this->set('page_katalog', 'brand');
		
		if ($this->request->is('post')) {
			$this->Brand->create();
			
			if ($this -> request -> data['Brand']['pict']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Brand']['pict']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Brand']['pict']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Category']['pict'];
				$this -> request -> data['Brand']['pict'] = $unique_name;
			} else {
				$this -> request -> data['Brand']['pict'] = null;
			}
			
			if ($this->Brand->save($this->request->data)) {
				
				if($this -> request -> data['Brand']['pict']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/brand', $temp);
					//$this->Image->remove_file($gbr_dulu, 'img/kategori');
				}
				
				$this->Session->setFlash(__('The brand has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'), 'flash_error');
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Brand - Katalog');
		$this->set('page_katalog', 'brand');
		
		$this->Brand->id = $id;
		if (!$this->Brand->exists()) {
			$this->Session->setFlash('Invalid brand', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['Brand']['pict_baru']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Brand']['pict_baru']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Brand']['pict_baru']['tmp_name'];
				$gbr_dulu = $this -> request -> data['Brand']['pict'];
				$this -> request -> data['Brand']['pict'] = $unique_name;
			} else {
				$this -> request -> data['Brand']['pict_baru'] = null;
			}
			
			
			if ($this->Brand->save($this->request->data)) {
				
				if($this -> request -> data['Brand']['pict_baru']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/brand', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/brand');
				}
				
				$this->Session->setFlash(__('The brand has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->Brand->read(null, $id);
		}
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
		$data = $this->Brand->find('first', array('conditions' => array('Brand.id' => $id), 'fields' => array('Brand.pict')));
		$this->Brand->id = $id;
		if (!$this->Brand->exists()) {
			$this->Session->setFlash('Invalid brand', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Brand->delete()) {
			
			if($data['Brand']['pict']){
				$this->Image->remove_file($data['Brand']['pict'], 'img/brand');
			}
			
			$this->Session->setFlash(__('Brand deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brand was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
