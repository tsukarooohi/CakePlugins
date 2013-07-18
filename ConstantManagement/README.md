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

<div>
利用アクセスURL<br>
ドメイン/constant_management/constant_toolbers/add
<div>