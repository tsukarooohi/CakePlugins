<?php
App::uses('Constant', 'ConstantManagement.Model');
$Constant = new Constant();

$constants = $Constant->_find();
if (!empty($constants)) {
	
	foreach ($constants as $v) {
		
		Configure::write($v['Constant']['name'], $v['Constant']['value']);
	}
}