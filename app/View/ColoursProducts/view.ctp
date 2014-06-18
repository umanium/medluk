<div class="coloursProducts view">
<h2><?php  echo __('Colours Product');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coloursProduct['ColoursProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coloursProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $coloursProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coloursProduct['Colour']['name'], array('controller' => 'colours', 'action' => 'view', $coloursProduct['Colour']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Colours Product'), array('action' => 'edit', $coloursProduct['ColoursProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Colours Product'), array('action' => 'delete', $coloursProduct['ColoursProduct']['id']), null, __('Are you sure you want to delete # %s?', $coloursProduct['ColoursProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colours Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
