<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Tambah Produk #3 <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<!-- Text Input: Start -->	
		<div class="field">
			<label>
				<span class="icon archive"></span>
				Selling Unit
			</label>
		</div>
		<div class="field">
			<?php
			echo $this->Html->link('Tambah', array('controller' => 'selling_units', 'action' => 'add', 'add', $id), array('class' => 'button')); 
			?>
			<table>
				<thead>
					<tr>
						<th class="align_left">No</th>
						<th class="align_left center">Nama</th>
						<th class="align_left center">Set</th>
						<th class="align_left center">Harga Lama</th>
						<th class="align_left center">Harga Baru</th>
						<th class="align_left center tools">Aksi</th>
					</tr>
				</thead>
				<tbody id="barisProdukTerkait">
					<?php
					for($i = 0; $i < count($selling_units); $i++){
						?>
						<tr class="gradeA">
							<td class="align_left"><?php echo ($i+1); ?></td>
							<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['name']; ?></td>
							<td class="align_left center"><?php echo $selling_units[$i][0]['set']; ?></td>
							<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['old_price']; ?></td>
							<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['new_price']; ?></td>
							<td class="align_left tools center sorting">
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'selling_units', 'action' => 'edit', $selling_units[$i]['SellingUnit']['id'], 'add', $id), array('class' => 'edit tip', 'title' => 'edit')); ?>
								<?php echo $this->Html->link(__('Delete'), array('controller' => 'selling_units', 'action' => 'delete', $selling_units[$i]['SellingUnit']['id'], 'add', $id), array('class' => 'delete tip', 'title' => 'delete'), __('Anda yakin akan menghapus selling unit # %s?', $selling_units[$i]['SellingUnit']['name'])); ?>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
		
		<div class="field">
			<?php
			echo $this->Html->link('Selesai', array('controller' => 'products', 'action' => 'index'), array('class' => 'button')); 
			?>
		</div>
		<!-- Text Input: End -->
		
	</div>
	<!-- Box Content: End -->
	
</div>	
<!-- 50% Box Grid Container: End -->