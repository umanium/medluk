<div class="keys view">
<h2><?php  echo __('Key');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($key['Key']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($key['Key']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($key['Key']['desc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Key'), array('action' => 'edit', $key['Key']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Key'), array('action' => 'delete', $key['Key']['id']), null, __('Are you sure you want to delete # %s?', $key['Key']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Colours');?></h3>
	<?php if (!empty($key['Colour'])):?>
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
		foreach ($key['Colour'] as $colour): ?>
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
