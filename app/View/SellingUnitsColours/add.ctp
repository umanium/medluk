<div class="sellingUnitsColours form">
<?php echo $this->Form->create('SellingUnitsColour');?>
	<fieldset>
		<legend><?php echo __('Add Selling Units Colour'); ?></legend>
	<?php
		echo $this->Form->input('selling_unit_id');
		echo $this->Form->input('colour_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Selling Units Colours'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
