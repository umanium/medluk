<div class="keys form">
<?php echo $this->Form->create('Key');?>
	<fieldset>
		<legend><?php echo __('Add Key'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Keys'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
