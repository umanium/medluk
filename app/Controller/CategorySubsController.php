<?php
App::uses('AppController', 'Controller');
/**
 * CategorySubs Controller
 *
 * @property CategorySub $CategorySub
 */
class CategorySubsController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Sub Kategori - Katalog');
		$this->set('page_katalog', 'sub kategori');
		
		if ($this->request->is('post')) {
			$search = $this->request->data['search'];
		} else {
			$search = null;
		}
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array('CategorySub.id', 'CategorySub.name', 'CategorySub.publish', 'Category.name'),
	    );
		$this->CategorySub->recursive = 0;
		
		$this->set('categorySubs', $this->paginate('CategorySub', array(
			'or'=> array(
			    array("CategorySub.name LIKE" => '%'.$search.'%')
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
		$this->set('title_for_layout', 'Detail Sub Kategori - Katalog');
		$this->set('page_katalog', 'sub kategori');
		
		$this->CategorySub->id = $id;
		if (!$this->CategorySub->exists()) {
			$this->Session->setFlash('Invalid sub category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categorySub', $this->CategorySub->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Sub Kategori - Katalog');
		$this->set('page_katalog', 'sub kategori');
		
		if ($this->request->is('post')) {
			$this->CategorySub->create();
			
			if ($this -> request -> data['CategorySub']['pict']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['CategorySub']['pict']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['CategorySub']['pict']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Category']['pict'];
				$this -> request -> data['CategorySub']['pict'] = $unique_name;
			} else {
				$this -> request -> data['CategorySub']['pict'] = null;
			}
			
			if ($this->CategorySub->save($this->request->data)) {
				$last_id = $this->CategorySub->getInsertID();
				for($i = 0 ; $i < count($this -> request -> data['CategorySub']['product']); $i++){
					$produkTerkait = array(
										'category_sub_id' => $last_id,
										'product_id' => $this -> request -> data['CategorySub']['product'][$i]
										);
					$this->CategorySub->CategorySubsProduct->saveAll($produkTerkait);
				}
				
				if($this -> request -> data['CategorySub']['pict']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/sub kategori', $temp);
					//$this->Image->remove_file($gbr_dulu, 'img/kategori');
				}
				
				$this->Session->setFlash(__('The category sub has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category sub could not be saved. Please, try again.'), 'flash_error');
			}
		}

		$categories = $this->CategorySub->Category->find('list');
		$categorySubs = array(
							'' => '-- Pilih Sub Kategori --'
							);
		$products = array(
							'' => '-- Pilih Produk --'
							);
		
		$this->set(compact('categories', 'products', 'categorySubs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Sub Kategori - Katalog');
		$this->set('page_katalog', 'sub kategori');
		
		$this->uses = array(
						'CategorySub',
						'CategorySubsProduct',
						'Product'
						);
		
		$this->CategorySub->id = $id;
		if (!$this->CategorySub->exists()) {
			$this->Session->setFlash('Invalid sub category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['CategorySub']['pict_baru']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['CategorySub']['pict_baru']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['CategorySub']['pict_baru']['tmp_name'];
				$gbr_dulu = $this -> request -> data['CategorySub']['pict'];
				$this -> request -> data['CategorySub']['pict'] = $unique_name;
			} else {
				$this -> request -> data['CategorySub']['pict_baru'] = null;
			}
			
			if ($this->CategorySub->save($this->request->data)) {
				
				$this->CategorySubsProduct->deleteAll(array(
						'CategorySubsProduct.category_sub_id' => $id
					));
				
				for($i = 0 ; $i < count($this -> request -> data['CategorySub']['product']); $i++){
					$produkTerkait = array(
										'category_sub_id' => $id,
										'product_id' => $this -> request -> data['CategorySub']['product'][$i]
										);
					$this->CategorySub->CategorySubsProduct->saveAll($produkTerkait);
				}
				
				if($this -> request -> data['CategorySub']['pict_baru']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/sub kategori', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/sub kategori');
				}
				
				$this->Session->setFlash(__('The sub category has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->CategorySub->read(null, $id);
		}
		
		$categories = $this->CategorySub->Category->find('list');
		$categorySubs = array(
							'' => '-- Pilih Sub Kategori --'
							);
		$products = array(
							'' => '-- Pilih Produk --'
							);
		
		$produkTerkait = $this->CategorySubsProduct->find('all', array(
							'fields' => array('CategorySubsProduct.id', 'CategorySubsProduct.category_sub_id', 'CategorySubsProduct.product_id', 'Product.name'),
							'joins' => array('LEFT JOIN products as Product ON(CategorySubsProduct.product_id = Product.id)'),
							'conditions' => array(
												'CategorySubsProduct.category_sub_id' => $id
												)
							));
		
		$this->set(compact('categories', 'products', 'categorySubs', 'produkTerkait'));
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
		$data = $this->CategorySub->find('first', array('conditions' => array('CategorySub.id' => $id), 'fields' => array('CategorySub.pict')));
		$this->CategorySub->id = $id;
		if (!$this->CategorySub->exists()) {
			$this->Session->setFlash('Invalid sub category', 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->CategorySub->delete()) {
			
			$this->CategorySub->CategorySubsProduct->deleteAll(array(
						'CategorySubsProduct.category_sub_id' => $id
					));
			
			if($data['CategorySub']['pict']){
				$this->Image->remove_file($data['CategorySub']['pict'], 'img/sub kategori');
			}
			
			$this->Session->setFlash(__('Category sub deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Category sub was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
	
/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_category_subs(){
		$categorySubs = $this->CategorySub->find('list', 
				array(
					'conditions' => array('CategorySub.category_id' => $_POST['category_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Sub Kategori --'
							);
		foreach ($categorySubs as $key => $value) {
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

/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_products(){
		$this->uses = array(
						'Product'
						);
		$products = $this->Product->find('list', 
				array(
					'conditions' => array('Product.category_sub_id' => $_POST['category_sub_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Produk --'
							);
		foreach ($products as $key => $value) {
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
