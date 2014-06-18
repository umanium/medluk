<div class="colours view">
<h2><?php  echo __('Colour');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($colour['Colour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($colour['Colour']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($colour['Colour']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Astm'); ?></dt>
		<dd>
			<?php echo h($colour['Colour']['astm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pict'); ?></dt>
		<dd>
			<?php echo h($colour['Colour']['pict']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Colour'), array('action' => 'edit', $colour['Colour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Colour'), array('action' => 'delete', $colour['Colour']['id']), null, __('Are you sure you want to delete # %s?', $colour['Colour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Colours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Colour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selling Units'), array('controller' => 'selling_units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Keys');?></h3>
	<?php if (!empty($colour['Key'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($colour['Key'] as $key): ?>
		<tr>
			<td><?php echo $key['id'];?></td>
			<td><?php echo $key['code'];?></td>
			<td><?php echo $key['desc'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'keys', 'action' => 'view', $key['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'keys', 'action' => 'edit', $key['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'keys', 'action' => 'delete', $key['id']), null, __('Are you sure you want to delete # %s?', $key['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products');?></h3>
	<?php if (!empty($colour['Product'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Brand Catalogue Id'); ?></th>
		<th><?php echo __('Brand Sub Catalogue Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Category Sub Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Desc'); ?></th>
		<th><?php echo __('Template'); ?></th>
		<th><?php echo __('Main Pict'); ?></th>
		<th><?php echo __('Sub Pict1'); ?></th>
		<th><?php echo __('Sub Pict2'); ?></th>
		<th><?php echo __('Sub Pict3'); ?></th>
		<th><?php echo __('Sub Pict4'); ?></th>
		<th><?php echo __('Colour Pdf'); ?></th>
		<th><?php echo __('Product Terkait1'); ?></th>
		<th><?php echo __('Product Terkait2'); ?></th>
		<th><?php echo __('Tutorial1'); ?></th>
		<th><?php echo __('Tutorial2'); ?></th>
		<th><?php echo __('Tutorial3'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($colour['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id'];?></td>
			<td><?php echo $product['brand_id'];?></td>
			<td><?php echo $product['brand_catalogue_id'];?></td>
			<td><?php echo $product['brand_sub_catalogue_id'];?></td>
			<td><?php echo $product['category_id'];?></td>
			<td><?php echo $product['category_sub_id'];?></td>
			<td><?php echo $product['name'];?></td>
			<td><?php echo $product['desc'];?></td>
			<td><?php echo $product['template'];?></td>
			<td><?php echo $product['main_pict'];?></td>
			<td><?php echo $product['sub_pict1'];?></td>
			<td><?php echo $product['sub_pict2'];?></td>
			<td><?php echo $product['sub_pict3'];?></td>
			<td><?php echo $product['sub_pict4'];?></td>
			<td><?php echo $product['colour_pdf'];?></td>
			<td><?php echo $product['product_terkait1'];?></td>
			<td><?php echo $product['product_terkait2'];?></td>
			<td><?php echo $product['tutorial1'];?></td>
			<td><?php echo $product['tutorial2'];?></td>
			<td><?php echo $product['tutorial3'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Selling Units');?></h3>
	<?php if (!empty($colour['SellingUnit'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Number'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($colour['SellingUnit'] as $sellingUnit): ?>
		<tr>
			<td><?php echo $sellingUnit['id'];?></td>
			<td><?php echo $sellingUnit['item_number'];?></td>
			<td><?php echo $sellingUnit['name'];?></td>
			<td><?php echo $sellingUnit['size'];?></td>
			<td><?php echo $sellingUnit['price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'selling_units', 'action' => 'view', $sellingUnit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'selling_units', 'action' => 'edit', $sellingUnit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'selling_units', 'action' => 'delete', $sellingUnit['id']), null, __('Are you sure you want to delete # %s?', $sellingUnit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Selling Unit'), array('controller' => 'selling_units', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
