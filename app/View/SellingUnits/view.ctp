<div class="sellingUnits view">
<h2><?php  echo __('Selling Unit');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sellingUnit['SellingUnit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Number'); ?></dt>
		<dd>
			<?php echo h($sellingUnit['SellingUnit']['item_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sellingUnit['SellingUnit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($sellingUnit['SellingUnit']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($sellingUnit['SellingUnit']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Selling Unit'), array('action' => 'edit', $sellingUnit['SellingUnit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Selling Unit'), array('action' => 'delete', $sellingUnit['SellingUnit']['id']), null, __('Are you sure you want to delete # %s?', $sellingUnit['SellingUnit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Colours');?></h3>
	<?php if (!empty($sellingUnit['Colour'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Astm'); ?></th>
		<th><?php echo __('Pict'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sellingUnit['Colour'] as $colour): ?>
		<tr>
			<td><?php echo $colour['id'];?></td>
			<td><?php echo $colour['code'];?></td>
			<td><?php echo $colour['name'];?></td>
			<td><?php echo $colour['astm'];?></td>
			<td><?php echo $colour['pict'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'colours', 'action' => 'view', $colour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'colours', 'action' => 'edit', $colour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'colours', 'action' => 'delete', $colour['id']), null, __('Are you sure you want to delete # %s?', $colour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
