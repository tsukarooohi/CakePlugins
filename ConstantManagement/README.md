プラグイン導入CakePHP
/app/Config/bootstrap.php
<code>
CakePlugin::loadAll(
	array(
		'ConstantManagement' => array(
			'bootstrap' => true
		)
	)
);
</code>
追加。