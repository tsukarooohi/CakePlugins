<?php	if (!empty($constants)) : ?>
<table class="constant_list">
	<tr>
		<td>定数名</td><td>値</td><td>説明</td><td>操作</td>
	</tr>
<?php		foreach ($constants as $v) : ?>
	<tr>
		<td><?php echo $v['Constant']['name']; ?></td>
		<td><?php echo $v['Constant']['value']; ?></td>
		<td><?php echo $v['Constant']['explanation']; ?></td>
		<td class="edit_select" data-constant-values='<?php echo json_encode($v['Constant']); ?>'>選択</td>
	</tr>
<?php		endforeach; ?>
</table>
<?php	endif; ?>
