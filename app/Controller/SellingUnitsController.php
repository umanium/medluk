<?php
App::uses('AppController', 'Controller');
/**
 * SellingUnits Controller
 *
 * @property SellingUnit $SellingUnit
 */
class SellingUnitsController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SellingUnit->recursive = 0;
		$this->set('sellingUnits', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SellingUnit->id = $id;
		if (!$this->SellingUnit->exists()) {
			throw new NotFoundException(__('Invalid selling unit'));
		}
		$this->set('sellingUnit', $this->SellingUnit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($page = null, $id = null) {
		$this->set('title_for_layout', 'Tambah Selling Unit - Katalog');
		$this->set('page_katalog', 'produk');
		
		if ($this->request->is('post')) {
			$this->SellingUnit->create();
			if ($this->SellingUnit->save($this->request->data)) {
				
				$last_id = $this->SellingUnit->getInsertID();
				for($i = 0 ; $i < count($this -> request -> data['SellingUnit']['colour']); $i++){
					$sellingColour = array(
										'selling_unit_id' => $last_id,
										'colour_id' => $this -> request -> data['SellingUnit']['colour'][$i]
										);
					$this->SellingUnit->SellingUnitsColour->saveAll($sellingColour);
				}
				
				$this->Session->setFlash(__('The selling unit has been saved'), 'flash_success');
				if($this->request->data['SellingUnit']['page'] == 'add'){
					$this->redirect(array('controller' => 'products', 'action' => 'add_3', $this->request->data['SellingUnit']['product_id']));
				} else {
					$this->redirect(array('controller' => 'products', 'action' => 'edit_3', $this->request->data['SellingUnit']['product_id']));
				}
				
			} else {
				$this->Session->setFlash(__('The selling unit could not be saved. Please, try again.'), 'flash_error');
			}
		}

		$colours = $this->SellingUnit->Colour->find('all', array(
						'fields' => array('Colour.id', 'Colour.pict', 'Colour.name', 'Colour.code'),
						'joins' => array('LEFT JOIN colours_products as ColoursProduct ON(Colour.id = ColoursProduct.colour_id)',
										'LEFT JOIN products as Product ON(ColoursProduct.product_id = Product.id)'),
						'conditions' => array('Product.id' => $id)
						));
						
		$this->set(compact('colours', 'page', 'id'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $page = null, $product_id = null) {
		$this->set('title_for_layout', 'Edit Selling Unit - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->SellingUnit->id = $id;
		if (!$this->SellingUnit->exists()) {
			$this->Session->setFlash(__('Invalid selling unit'), 'flash_note');
			if($page == 'add'){
				$this->redirect(array('controller' => 'products', 'action' => 'add_3', $product_id));
			} else {
				$this->redirect(array('controller' => 'products', 'action' => 'edit_3', $product_id));
			}
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SellingUnit->save($this->request->data)) {
				
				$this->SellingUnit->SellingUnitsColour->deleteAll(array(
						'SellingUnitsColour.selling_unit_id' => $id
					));
				
				for($i = 0 ; $i < count($this -> request -> data['SellingUnit']['colour']); $i++){
					$sellingColour = array(
										'selling_unit_id' => $id,
										'colour_id' => $this -> request -> data['SellingUnit']['colour'][$i]
										);
					$this->SellingUnit->SellingUnitsColour->saveAll($sellingColour);
				}
				
				$this->Session->setFlash(__('The selling unit has been saved'), 'flash_success');
				if($this->request->data['SellingUnit']['page'] == 'add'){
					$this->redirect(array('controller' => 'products', 'action' => 'add_3', $this->request->data['SellingUnit']['product_id']));
				} else {
					$this->redirect(array('controller' => 'products', 'action' => 'edit_3', $this->request->data['SellingUnit']['product_id']));
				}
				
			} else {
				$this->Session->setFlash(__('The selling unit could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->SellingUnit->read(null, $id);
		}
		
		$colours = $this->SellingUnit->Colour->find('all', array(
						'fields' => array('Colour.id', 'Colour.pict', 'Colour.name', 'Colour.code'),
						'joins' => array('LEFT JOIN colours_products as ColoursProduct ON(Colour.id = ColoursProduct.colour_id)',
										'LEFT JOIN products as Product ON(ColoursProduct.product_id = Product.id)'),
						'conditions' => array('Product.id' => $product_id)
						));
		$sellingColour = $this->SellingUnit->SellingUnitsColour->find('all', array(
							'conditions' => array('SellingUnitsColour.selling_unit_id' => $id)
							));
		$this->set(compact('colours', 'page', 'product_id', 'sellingColour'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $page, $product_id) {
		$this->SellingUnit->id = $id;
		if (!$this->SellingUnit->exists()) {
			$this->Session->setFlash(__('Invalid selling unit'), 'flash_note');
			if($page == 'add'){
				$this->redirect(array('controller' => 'products', 'action' => 'add_3', $product_id));
			} else {
				$this->redirect(array('controller' => 'products', 'action' => 'edit_3', $product_id));
			}
		}
		if ($this->SellingUnit->delete()) {
			
			$this->SellingUnit->SellingUnitsColour->deleteAll(array(
						'SellingUnitsColour.selling_unit_id' => $id
					));
			
			$this->Session->setFlash(__('Selling unit deleted'), 'flash_success');
			if($page == 'add'){
				$this->redirect(array('controller' => 'products', 'action' => 'add_3', $product_id));
			} else {
				$this->redirect(array('controller' => 'products', 'action' => 'edit_3', $product_id));
			}
		}
		$this->Session->setFlash(__('Selling unit was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}
}
