<?php
App::uses('AppController', 'Controller');
/**
 * ColoursProducts Controller
 *
 * @property ColoursProduct $ColoursProduct
 */
class ColoursProductsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ColoursProduct->recursive = 0;
		$this->set('coloursProducts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ColoursProduct->id = $id;
		if (!$this->ColoursProduct->exists()) {
			throw new NotFoundException(__('Invalid colours product'));
		}
		$this->set('coloursProduct', $this->ColoursProduct->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ColoursProduct->create();
			if ($this->ColoursProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The colours product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colours product could not be saved. Please, try again.'));
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
		$this->ColoursProduct->id = $id;
		if (!$this->ColoursProduct->exists()) {
			throw new NotFoundException(__('Invalid colours product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ColoursProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The colours product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colours product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ColoursProduct->read(null, $id);
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
		$this->ColoursProduct->id = $id;
		if (!$this->ColoursProduct->exists()) {
			throw new NotFoundException(__('Invalid colours product'));
		}
		if ($this->ColoursProduct->delete()) {
			$this->Session->setFlash(__('Colours product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Colours product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
