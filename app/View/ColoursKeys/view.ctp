<div class="coloursKeys view">
<h2><?php  echo __('Colours Key');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coloursKey['ColoursKey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coloursKey['Colour']['name'], array('controller' => 'colours', 'action' => 'view', $coloursKey['Colour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coloursKey['Key']['id'], array('controller' => 'keys', 'action' => 'view', $coloursKey['Key']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Colours Key'), array('action' => 'edit', $coloursKey['ColoursKey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Colours Key'), array('action' => 'delete', $coloursKey['ColoursKey']['id']), null, __('Are you sure you want to delete # %s?', $coloursKey['ColoursKey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours Keys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colours Key'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
