<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Sub Kategori <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/category_subs"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/category_subs/add"; ?>">Tambah Sub Kategori</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($categorySub['CategorySub']['name']); ?> 
		</p>
		
		<h4>Kategori</h4>
		
		<p>
			<?php echo $this->Html->link($categorySub['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categorySub['Category']['id'])); ?> 
		</p>
		
		<h4>Publish</h4>
		
		<p>
			<?php echo ($categorySub['CategorySub']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
		
		<h4>Gambar</h4>
		
		<p>
			<?php echo $this->Html->image('sub kategori/'.$categorySub['CategorySub']['pict'], 
										array(
											'title' => h($categorySub['CategorySub']['name']),
											'alt' => h($categorySub['CategorySub']['name']),
											'width' => '475px',
											'height' => '245px',
											)
										); ?> 
		</p>
		
		<h4>Produk Terkait</h4>
		
		<p>
			<?php if (!empty($categorySub['Product'])):?>
			<table>
				<thead>
					<tr>
						<th class="align_left">No</th>
						<th class="align_left center">Nama Produk</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($categorySub['Product'] as $key => $product): ?>
					<tr class="gradeA">
						<td class="align_left"><?php echo ($key+1); ?>&nbsp;</td>
						<td class="align_left center"><?php echo $product['name']; ?>&nbsp;</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php endif; ?>
		</p>
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->