<?php echo $this->Form->create(null, array('name' => 'post', 'class' => 'ConstantAddForm')); ?>
<table class="constant_add">
	<col style="width: 300px;">
	<col style="width: 300px;">
	<col style="width: auto;">
	<col style="width: 300px;">
	<tr>
		<td <?php if (!empty($this->Form->validationErrors['Constant']['name'][0])) : ?>class="error"<?php endif; ?>>定数名</td>
		<td <?php if (!empty($this->Form->validationErrors['Constant']['value'][0])) : ?>class="error"<?php endif; ?>>値</td>
		<td <?php if (!empty($this->Form->validationErrors['Constant']['explanation'][0])) : ?>class="error"<?php endif; ?>>説明</td>
		<td>操作</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->input('Constant.name', array(
				'type' => 'text'
			   ,'size' => 10
			   ,'placeholder' => "定数名を入力してください"
			   ,'label' => false
			   ,'div' => false
			)); ?>
		</td>
		<td>
			<?php echo $this->Form->input('Constant.value', array(
				'type' => 'text'
				,'size' => 10
				,'placeholder' => "値を入力してください"
				,'label' => false
				,'div' => false
			)); ?>
		</td>
		<td>
			<?php echo $this->Form->input('Constant.explanation', array(
				'type' => 'text'
				,'size' => 10
				,'placeholder' => "説明を入力してください"
				,'label' => false
				,'div' => false
			)); ?>
		</td>
		<td class="constant_add_button">
			<?php echo $this->Form->submit("リセット", array(
				'type' => 'reset'
				,'name' => 'reset'
				,'label' => false
				,'div' => false
				,'style' => array('width: 90px')
			)); ?>
			<?php echo $this->Form->submit("登 録", array(
				'name' => 'add'
				,'label' => false
				,'div' => false
			)); ?>
		</td>
	</tr>
</table>

<?php echo $this->Form->end(); ?>