プラグイン導入CakePHP<br>
/app/Config/bootstrap.php
<pre>
CakePlugin::loadAll(
	array(
		'ConstantManagement' => array(
			'bootstrap' => true
		)
	)
);
</pre>
追加。