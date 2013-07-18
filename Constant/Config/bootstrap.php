<?php
App::uses('Constant', 'Constant.Model');
$Constant = new Constant();

$constants = $Constant->_find();
if (!empty($constants)) {
	
	foreach ($constants as $v) {
		
		Configure::write($v['Constant']['name'], $v['Constant']['value']);
	}
}