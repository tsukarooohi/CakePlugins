<?php
App::uses('ConstantManagementAppController', 'ConstantManagement.Controller');
/**
 * Constants Controller
 *
 * @property Constant $Constant
 */
class ConstantToolbersController extends ConstantManagementAppController {


	public $name = 'ConstantToolbers';
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	public $uses = array('ConstantManagement.Constant');

	public function index() {

		$constants = $this->Constant->_find();
		
		$this->set(compact('constants'));
	}
	
	public function add() {

		if (!empty($this->data['dele'])) {
			
			$this->__delete($this->data);
		}
		
		if (!empty($this->data['add'])){

			$complete = "登録完了!";
			if (!empty($this->data['Constant']['id'])) {
				unset($this->Constant->validate['name']['rule3']);
				$complete = "編集完了!";
			}

			if ($this->Constant->save($this->data)) {

				$this->Session->setFlash($complete);
				$this->redirect('add');
			}

		}
	}

	private function __delete($data) {
		
		if ($this->Constant->delete($data['Constant']['id'])) {
			
			$this->Session->setFlash("削除しました。");
			$this->redirect('add');
		}
		else {
			
			$this->Session->setFlash("削除に失敗しました。");
			$this->redirect('add');
		}
		
	}
}
