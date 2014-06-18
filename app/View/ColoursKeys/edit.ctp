<div class="coloursKeys form">
<?php echo $this->Form->create('ColoursKey');?>
	<fieldset>
		<legend><?php echo __('Edit Colours Key'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('colour_id');
		echo $this->Form->input('key_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ColoursKey.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ColoursKey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Colours Keys'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
