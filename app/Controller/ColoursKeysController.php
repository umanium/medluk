<?php
App::uses('AppController', 'Controller');
/**
 * ColoursKeys Controller
 *
 * @property ColoursKey $ColoursKey
 */
class ColoursKeysController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ColoursKey->recursive = 0;
		$this->set('coloursKeys', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ColoursKey->id = $id;
		if (!$this->ColoursKey->exists()) {
			throw new NotFoundException(__('Invalid colours key'));
		}
		$this->set('coloursKey', $this->ColoursKey->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ColoursKey->create();
			if ($this->ColoursKey->save($this->request->data)) {
				$this->Session->setFlash(__('The colours key has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colours key could not be saved. Please, try again.'));
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
		$this->ColoursKey->id = $id;
		if (!$this->ColoursKey->exists()) {
			throw new NotFoundException(__('Invalid colours key'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ColoursKey->save($this->request->data)) {
				$this->Session->setFlash(__('The colours key has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colours key could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ColoursKey->read(null, $id);
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
		$this->ColoursKey->id = $id;
		if (!$this->ColoursKey->exists()) {
			throw new NotFoundException(__('Invalid colours key'));
		}
		if ($this->ColoursKey->delete()) {
			$this->Session->setFlash(__('Colours key deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Colours key was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
