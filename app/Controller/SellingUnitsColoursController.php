<?php
App::uses('AppController', 'Controller');
/**
 * SellingUnitsColours Controller
 *
 * @property SellingUnitsColour $SellingUnitsColour
 */
class SellingUnitsColoursController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SellingUnitsColour->recursive = 0;
		$this->set('sellingUnitsColours', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SellingUnitsColour->id = $id;
		if (!$this->SellingUnitsColour->exists()) {
			throw new NotFoundException(__('Invalid selling units colour'));
		}
		$this->set('sellingUnitsColour', $this->SellingUnitsColour->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SellingUnitsColour->create();
			if ($this->SellingUnitsColour->save($this->request->data)) {
				$this->Session->setFlash(__('The selling units colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selling units colour could not be saved. Please, try again.'));
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
		$this->SellingUnitsColour->id = $id;
		if (!$this->SellingUnitsColour->exists()) {
			throw new NotFoundException(__('Invalid selling units colour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SellingUnitsColour->save($this->request->data)) {
				$this->Session->setFlash(__('The selling units colour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selling units colour could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SellingUnitsColour->read(null, $id);
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
		$this->SellingUnitsColour->id = $id;
		if (!$this->SellingUnitsColour->exists()) {
			throw new NotFoundException(__('Invalid selling units colour'));
		}
		if ($this->SellingUnitsColour->delete()) {
			$this->Session->setFlash(__('Selling units colour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Selling units colour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
