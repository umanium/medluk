<?php
App::uses('AppController', 'Controller');
/**
 * Brands Controller
 *
 * @property Brand $Brand
 */
class AdminsController extends AppController {
	
	var $helpers = array('Js');
	var $layout = 'admin';

/**
 * index method
 *
 * @return void to first page of Admin Panel
 */
	public function index() {
		$this->uses = null;
		$this->set('title_for_layout', 'Admin Panel Media Lukis');
		$this->Session->setFlash('Selamat Datang di Admin Panel Media Lukis!.', 'flash_info');
	}
	
	public function login(){
		$this->layout = null;
		$this->uses = array('');
		if ($this->request->is('post')) {
			
		}
	}
	
	public function logout(){
		
	}
	
	public function katalog(){
		$this->layout = 'admin_katalog';
		$this->set('title_for_layout', 'Katalog');
		$this->set('page_katalog', 'index');
		$this->uses = null;
	}

}
