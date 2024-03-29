<div class="sellingUnits index">
	<h2><?php echo __('Selling Units');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('item_number');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sellingUnits as $sellingUnit): ?>
	<tr>
		<td><?php echo h($sellingUnit['SellingUnit']['id']); ?>&nbsp;</td>
		<td><?php echo h($sellingUnit['SellingUnit']['item_number']); ?>&nbsp;</td>
		<td><?php echo h($sellingUnit['SellingUnit']['name']); ?>&nbsp;</td>
		<td><?php echo h($sellingUnit['SellingUnit']['size']); ?>&nbsp;</td>
		<td><?php echo h($sellingUnit['SellingUnit']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sellingUnit['SellingUnit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sellingUnit['SellingUnit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sellingUnit['SellingUnit']['id']), null, __('Are you sure you want to delete # %s?', $sellingUnit['SellingUnit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
