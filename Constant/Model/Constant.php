<?php
App::uses('ConstantAppModel', 'Constant.Model');
/**
 * Constant Model
 *
 */
class Constant extends ConstantAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $name = 'Constant';

	function _find($options = array()) {
		
		$default_option = array(
			'fields' => array(
				$this->name . '.name'
				,$this->name . '.value'
				,$this->name . '.explanation'
			)
		);
		
		$default_option += $options;

		return $this->find('all', $default_option);
		
	}

}
