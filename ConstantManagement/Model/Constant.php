<?php
App::uses('ConstantsAppModel', 'ConstantManagement.Model');

/**
 * Constant Model
 *
 */
class Constant extends ConstantsAppModel {

	public $name = 'Constant';
	public $validate = array(
		'name' => array(
			'rule1' => array(
				'rule' => 'notEmpty'
				,'message' => "定数名を入力してください。"
				,'last' => true
				,'required' => true
			)
			,'rule2' => array(
				'rule' => array('custom', '/^([a-z_]+)$/i')
				,'message' => "半角英字のみにしてください。"
				,'last' => true
				,'required' => true
			)
			,'rule3' => array(
				'rule' => array('__nameDuplication', 'name')
				,'message' => "定数名が重複しています。"
				,'last' => true
				,'required' => true
			)
		)
		,'value' => array(
			'rule1' => array(
				'rule' => 'notEmpty'
				,'message' => "値を入力してください。"
				,'last' => true
				,'required' => true
			)
		)
		,'explanation' => array(
			'rule1' => array(
				'rule' => 'notEmpty'
				,'message' => "説明を入力してください。"
				,'last' => true
				,'required' => true
			)
		)
	);
	
	function __nameDuplication($data, $name) {
		
		if ($this->find('count', array(
			'conditions' => array(
				$this->name . '.' . $name => $data[$name]
			)
		))) {
			
			return false;
		}

		return true;
	}
	
	function _find($options = array()) {
		
		$default_option = array(
			'fields' => array(
				 $this->name . '.id'
				,$this->name . '.name'
				,$this->name . '.value'
				,$this->name . '.explanation'
			)
		);
		
		$default_option += $options;

		return $this->find('all', $default_option);
		
	}
}
