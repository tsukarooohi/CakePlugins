<?php
/**
 * ConstantFixture
 *
 */
class ConstantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'プライマリーID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '定数名', 'charset' => 'utf8'),
		'value' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '値', 'charset' => 'utf8'),
		'explanation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '説明', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '作成日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'value' => 'Lorem ipsum dolor sit amet',
			'explanation' => 'Lorem ipsum dolor sit amet',
			'modified' => '2013-07-17 14:53:38',
			'created' => '2013-07-17 14:53:38'
		),
	);

}
