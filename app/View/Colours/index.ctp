<div class="colours index">
	<h2><?php echo __('Colours');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('astm');?></th>
			<th><?php echo $this->Paginator->sort('pict');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($colours as $colour): ?>
	<tr>
		<td><?php echo h($colour['Colour']['id']); ?>&nbsp;</td>
		<td><?php echo h($colour['Colour']['code']); ?>&nbsp;</td>
		<td><?php echo h($colour['Colour']['name']); ?>&nbsp;</td>
		<td><?php echo h($colour['Colour']['astm']); ?>&nbsp;</td>
		<td><?php echo h($colour['Colour']['pict']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $colour['Colour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $colour['Colour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $colour['Colour']['id']), null, __('Are you sure you want to delete # %s?', $colour['Colour']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Colour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
	</ul>
</div>
