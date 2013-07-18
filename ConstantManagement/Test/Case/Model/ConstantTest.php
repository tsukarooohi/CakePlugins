<?php
App::uses('Constant', 'Constants.Model');

/**
 * Constant Test Case
 *
 */
class ConstantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.constants.constant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Constant = ClassRegistry::init('Constants.Constant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Constant);

		parent::tearDown();
	}

}
