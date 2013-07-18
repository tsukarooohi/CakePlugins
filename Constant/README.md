プラグイン導入CakePHP<br>
/app/Config/bootstrap.php
<pre>
CakePlugin::loadAll(
	array(
		'Constant' => array(
			'bootstrap' => true
		)
	)
);
</pre>
追加。