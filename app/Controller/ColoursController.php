<?php
App::uses('AppController', 'Controller');
/**
 * Colours Controller
 *
 * @property Colour $Colour
 */
class ColoursController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Colour->recursive = 0;
		$this->set('colours', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Colour->id = $id;
		if (!$this->Colour->exists()) {
			throw new NotFoundException(__('Invalid colour'));
		}
		$this->set('colour', $this->Colour->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Colour->create();
			if ($this->Colour->save($this->request->data)) {
				$this->Session->setFlash(__('The colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colour could not be saved. Please, try again.'));
			}
		}
		$keys = $this->Colour->Key->find('list');
		$products = $this->Colour->Product->find('list');
		$sellingUnits = $this->Colour->SellingUnit->find('list');
		$this->set(compact('keys', 'products', 'sellingUnits'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Colour->id = $id;
		if (!$this->Colour->exists()) {
			throw new NotFoundException(__('Invalid colour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Colour->save($this->request->data)) {
				$this->Session->setFlash(__('The colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colour could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Colour->read(null, $id);
		}
		$keys = $this->Colour->Key->find('list');
		$products = $this->Colour->Product->find('list');
		$sellingUnits = $this->Colour->SellingUnit->find('list');
		$this->set(compact('keys', 'products', 'sellingUnits'));
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
		$this->Colour->id = $id;
		if (!$this->Colour->exists()) {
			throw new NotFoundException(__('Invalid colour'));
		}
		if ($this->Colour->delete()) {
			$this->Session->setFlash(__('Colour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Colour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
