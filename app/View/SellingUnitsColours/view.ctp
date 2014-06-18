<div class="sellingUnitsColours view">
<h2><?php  echo __('Selling Units Colour');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sellingUnitsColour['SellingUnitsColour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selling Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sellingUnitsColour['SellingUnit']['name'], array('controller' => 'selling_units', 'action' => 'view', $sellingUnitsColour['SellingUnit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sellingUnitsColour['Colour']['name'], array('controller' => 'colours', 'action' => 'view', $sellingUnitsColour['Colour']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Selling Units Colour'), array('action' => 'edit', $sellingUnitsColour['SellingUnitsColour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Selling Units Colour'), array('action' => 'delete', $sellingUnitsColour['SellingUnitsColour']['id']), null, __('Are you sure you want to delete # %s?', $sellingUnitsColour['SellingUnitsColour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units Colours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Units Colour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('controller' => 'colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('controller' => 'colours', 'action' => 'add')); ?> </li>
	</ul>
</div>
