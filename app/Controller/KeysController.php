<?php
App::uses('AppController', 'Controller');
/**
 * Keys Controller
 *
 * @property Key $Key
 */
class KeysController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Key->recursive = 0;
		$this->set('keys', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Key->id = $id;
		if (!$this->Key->exists()) {
			throw new NotFoundException(__('Invalid key'));
		}
		$this->set('key', $this->Key->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Key->create();
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		}
		$colours = $this->Key->Colour->find('list');
		$this->set(compact('colours'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Key->id = $id;
		if (!$this->Key->exists()) {
			throw new NotFoundException(__('Invalid key'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Key->read(null, $id);
		}
		$colours = $this->Key->Colour->find('list');
		$this->set(compact('colours'));
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
		$this->Key->id = $id;
		if (!$this->Key->exists()) {
			throw new NotFoundException(__('Invalid key'));
		}
		if ($this->Key->delete()) {
			$this->Session->setFlash(__('Key deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Key was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
