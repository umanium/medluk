<div class="coloursKeys index">
	<h2><?php echo __('Colours Keys');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('colour_id');?></th>
			<th><?php echo $this->Paginator->sort('key_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($coloursKeys as $coloursKey): ?>
	<tr>
		<td><?php echo h($coloursKey['ColoursKey']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coloursKey['Colour']['name'], array('controller' => 'colours', 'action' => 'view', $coloursKey['Colour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coloursKey['Key']['id'], array('controller' => 'keys', 'action' => 'view', $coloursKey['Key']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coloursKey['ColoursKey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coloursKey['ColoursKey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coloursKey['ColoursKey']['id']), null, __('Are you sure you want to delete # %s?', $coloursKey['ColoursKey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Colours Key'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
