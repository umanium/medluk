<div class="colours form">
<?php echo $this->Form->create('Colour');?>
	<fieldset>
		<legend><?php echo __('Add Colour'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('astm');
		echo $this->Form->input('pict');
		echo $this->Form->input('Key');
		echo $this->Form->input('Product');
		echo $this->Form->input('SellingUnit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Colours'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
	</ul>
</div>
