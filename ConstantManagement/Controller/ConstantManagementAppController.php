<?php

App::uses('AppController', 'Controller');

class ConstantManagementAppController extends AppController {

	function beforeFilter() {
		parent::beforeFilter();
		
		$constants = $this->Constant->_find();
		$this->set(compact('constants'));
	}
}
