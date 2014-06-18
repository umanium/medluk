<div class="keys form">
<?php echo $this->Form->create('Key');?>
	<fieldset>
		<legend><?php echo __('Edit Key'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('desc');
		echo $this->Form->input('Colour');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Key.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Key.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Keys'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
