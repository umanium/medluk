<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Produk <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/products"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/products/add"; ?>">Tambah Produk</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($product['Product']['name']); ?> 
		</p>

		<h4>Publish</h4>
		
		<p>
			<?php echo ($product['Product']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
		
		<h4>Sub Katalog Brand</h4>
		
		<p>
			<?php echo $this->Html->link($product['BrandSubCatalogue']['name'], array('controller' => 'brand_sub_catalogues', 'action' => 'view', $product['BrandSubCatalogue']['id'])); ?> 
		</p>
		
		<h4>Sub Kategory</h4>
		
		<p>
			<?php echo $this->Html->link($product['CategorySub']['name'], array('controller' => 'category_subs', 'action' => 'view', $product['CategorySub']['id'])); ?>
		</p>
		
		<h4>Deskripsi</h4>
		
		<p>
			<?php echo h($product['Product']['desc']); ?>
		</p>
		
		<h4>Template</h4>
		
		<p>
			<?php echo h($product['Product']['template']); ?> 
		</p>
		
		<h4>Gambar Utama</h4>
		
		<p>
			<?php echo $this->Html->image('produk/main/'.$product['Product']['main_pict'], 
										array(
											'title' => h($product['Product']['name']),
											'alt' => h($product['Product']['name']),
											'width' => '224px',
											'height' => '300px',
											)
										); ?>  
		</p>
		
		<h4>Gambar Pertama</h4>
		
		<p>
			<?php
			if($product['Product']['sub_pict1'] != ''){  
			echo $this->Html->image('produk/sub/'.$product['Product']['sub_pict1'], 
										array(
											'title' => h($product['Product']['name']),
											'alt' => h($product['Product']['name']),
											'width' => '395px',
											'height' => '537px',
											)
										); 
			}?>  
		</p>
		
		<h4>Gambar Kedua</h4>
		
		<p>
			<?php
			if($product['Product']['sub_pict2'] != ''){  
			echo $this->Html->image('produk/sub/'.$product['Product']['sub_pict2'], 
										array(
											'title' => h($product['Product']['name']),
											'alt' => h($product['Product']['name']),
											'width' => '395px',
											'height' => '537px',
											)
										); 
			}?>  
		</p>
		
		<h4>Gambar Ketiga</h4>
		
		<p>
			<?php
			if($product['Product']['sub_pict3'] != ''){ 
			echo $this->Html->image('produk/sub/'.$product['Product']['sub_pict3'], 
										array(
											'title' => h($product['Product']['name']),
											'alt' => h($product['Product']['name']),
											'width' => '395px',
											'height' => '537px',
											)
										);
			} 
			?>  
		</p>
		
		<h4>Gambar Keempat</h4>
		
		<p>
			<?php
			if($product['Product']['sub_pict4'] != ''){  
			echo $this->Html->image('produk/sub/'.$product['Product']['sub_pict4'], 
										array(
											'title' => h($product['Product']['name']),
											'alt' => h($product['Product']['name']),
											'width' => '395px',
											'height' => '537px',
											)
										); 
			}?>  
		</p>
		
		<h4>Warna PDF</h4>
		
		<p>
			<?php echo $this->Html->link('Warna PDF', 'http://localhost'.$this->base.'/img/produk/pdf/'.$product['Product']['colour_pdf']); ?>
		</p>
		
		<h4>Produk Terkait Pertama</h4>
		
		<p>
			<?php echo $this->Html->link($produkTerkait1['Product']['name'], array('controller' => 'products', 'action' => 'view', $produkTerkait1['Product']['id'])); ?>
		</p>
		
		<h4>Produk Terkait Kedua</h4>
		
		<p>
			<?php echo $this->Html->link($produkTerkait2['Product']['name'], array('controller' => 'products', 'action' => 'view', $produkTerkait2['Product']['id'])); ?>
		</p>
		
		<h4>Tutorial Pertama</h4>
		
		<p>
			
		</p>
		
		<h4>Tutorial Kedua</h4>
		
		<p>
			
		</p>
		
		<h4>Tutorial Ketiga</h4>
		
		<p>
			
		</p>
		
		<h4>Selling Unit</h4>
		
		<p>
			
			<table>
				<thead>
					<tr>
						<th class="align_left">No</th>
						<th class="align_left center">Item</th>
						<th class="align_left center">Nama</th>
						<th class="align_left center">Set</th>
						<th class="align_left center">Harga Lama</th>
						<th class="align_left center">Harga Baru</th>
					</tr>
				</thead>
				<tbody>
				<?php
				for($i = 0; $i < count($selling_units); $i++){
				?>
					<tr class="gradeA">
						<td class="align_left"><?php echo ($i+1); ?>&nbsp;</td>
						<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['item_number']; ?></td>
						<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['name']; ?></td>
						<td class="align_left center"><?php echo $selling_units[$i][0]['set']; ?></td>
						<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['old_price']; ?></td>
						<td class="align_left center"><?php echo $selling_units[$i]['SellingUnit']['new_price']; ?></td>
					</tr>
				<?php
				} 
				?>
				
				</tbody>
			</table>

		</p>
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->