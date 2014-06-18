<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Kategori - Katalog');
		$this->set('page_katalog', 'kategori');
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array('Category.id', 'Category.name', 'Category.publish'),
	    );
		$this->Category->recursive = -1;
		$this->set('categories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Detail Kategori - Katalog');
		$this->set('page_katalog', 'kategori');
		$this->Category->recursive = -1;
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			$this->Session->setFlash('Invalid category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Kategori - Katalog');
		$this->set('page_katalog', 'kategori');
		
		if ($this->request->is('post')) {
			$this->Category->create();
			
			if ($this -> request -> data['Category']['pict']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Category']['pict']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Category']['pict']['tmp_name'];
				//$gbr_dulu = $this->data['Category']['pict'];
				$this -> request -> data['Category']['pict'] = $unique_name;
			} else {
				$this -> request -> data['Category']['pict'] = null;
			}
			
			if ($this -> request -> data['Category']['long_pict']['name'] != "") {
				$file_type2 = $this -> Image -> get_file_type($this -> request -> data['Category']['long_pict']['name']);
				$unique_name2 = rand(100, 999) . $this -> Image -> get_unique_name($file_type2);
				$temp2 = $this -> request -> data['Category']['long_pict']['tmp_name'];
				//$gbr_dulu = $this->data['Category']['pict'];
				$this -> request -> data['Category']['long_pict'] = $unique_name2;
			} else {
				$this -> request -> data['Category']['long_pict'] = null;
			}
			
			if ($this->Category->save($this->request->data)) {
				
				if($this -> request -> data['Category']['pict']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/kategori', $temp);
					$this -> Image -> copy_grayscale($unique_name, $file_type, 'img/kategori/grayscale', $temp);
					//$this->Image->remove_file($gbr_dulu, 'img/kategori');
				}
				
				if($this -> request -> data['Category']['long_pict']){
					$this -> Image -> copy_file($unique_name2, $file_type2, 'img/kategori', $temp2);
					//$this->Image->remove_file($gbr_dulu, 'img/kategori');
				}
				
				$this->Session->setFlash('The category has been saved', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The category could not be saved. Please, try again.', 'flash_error');
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
		$this->set('title_for_layout', 'Edit Kategori - Katalog');
		$this->set('page_katalog', 'kategori');
		$this->Category->recursive = -1;
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			$this->Session->setFlash('Invalid category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['Category']['pict_baru']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Category']['pict_baru']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Category']['pict_baru']['tmp_name'];
				$gbr_dulu = $this -> request -> data['Category']['pict'];
				$this -> request -> data['Category']['pict'] = $unique_name;
			} else {
				$this -> request -> data['Category']['pict_baru'] = null;
			}
			
			if ($this -> request -> data['Category']['long_pict_baru']['name'] != "") {
				$file_type2 = $this -> Image -> get_file_type($this -> request -> data['Category']['long_pict_baru']['name']);
				$unique_name2 = rand(100, 999) . $this -> Image -> get_unique_name($file_type2);
				$temp2 = $this -> request -> data['Category']['long_pict_baru']['tmp_name'];
				$gbr_dulu2 = $this -> request -> data['Category']['long_pict'];
				$this -> request -> data['Category']['long_pict'] = $unique_name2;
			} else {
				$this -> request -> data['Category']['long_pict_baru'] = null;
			}
			
			
			if ($this->Category->save($this->request->data)) {
				if($this -> request -> data['Category']['pict_baru']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/kategori', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/kategori');
					
					$this -> Image -> copy_grayscale($unique_name, $file_type, 'img/kategori/grayscale', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/kategori/grayscale');
				}
				
				if($this -> request -> data['Category']['long_pict_baru']){
					$this -> Image -> copy_file($unique_name2, $file_type2, 'img/kategori', $temp2);
					$this->Image->remove_file($gbr_dulu2, 'img/kategori');
				}

				$this->Session->setFlash(__('The category has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->Category->read(null, $id);
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
		$data = $this->Category->find('first', array('conditions' => array('Category.id' => $id), 'fields' => array('Category.pict', 'Category.long_pict')));
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			$this->Session->setFlash('Invalid category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Category->delete()) {
			
			if($data['Category']['pict']){
				$this->Image->remove_file($data['Category']['pict'], 'img/kategori');
				$this->Image->remove_file($data['Category']['pict'], 'img/kategori/grayscale');
			}
			
			if($data['Category']['long_pict']){
				$this->Image->remove_file($data['Category']['long_pict'], 'img/kategori');
			}
			
			$this->Session->setFlash('Category deleted', 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Category was not deleted', 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
