<div class="sellingUnitsColours index">
	<h2><?php echo __('Selling Units Colours');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('selling_unit_id');?></th>
			<th><?php echo $this->Paginator->sort('colour_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sellingUnitsColours as $sellingUnitsColour): ?>
	<tr>
		<td><?php echo h($sellingUnitsColour['SellingUnitsColour']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sellingUnitsColour['SellingUnit']['name'], array('controller' => 'selling_units', 'action' => 'view', $sellingUnitsColour['SellingUnit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sellingUnitsColour['Colour']['name'], array('controller' => 'colours', 'action' => 'view', $sellingUnitsColour['Colour']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sellingUnitsColour['SellingUnitsColour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sellingUnitsColour['SellingUnitsColour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sellingUnitsColour['SellingUnitsColour']['id']), null, __('Are you sure you want to delete # %s?', $sellingUnitsColour['SellingUnitsColour']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Selling Units Colour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
