<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Katalog Brand <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/brand_catalogues"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/brand_catalogues/add"; ?>">Tambah Katalog</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($brandCatalogue['BrandCatalogue']['name']); ?> 
		</p>
		
		<h4>Brand</h4>
		
		<p>
			<?php echo $this->Html->link($brandCatalogue['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $brandCatalogue['Brand']['id'])); ?> 
		</p>
		
		<h4>Publish</h4>
		
		<p>
			<?php echo ($brandCatalogue['BrandCatalogue']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
		
		<h4>Gambar</h4>
		
		<p>
			<?php echo $this->Html->image('katalog brand/'.$brandCatalogue['BrandCatalogue']['pict'], 
										array(
											'title' => h($brandCatalogue['BrandCatalogue']['name']),
											'alt' => h($brandCatalogue['BrandCatalogue']['name']),
											'width' => '217px',
											'height' => '227px',
											)
										); ?> 
		</p>
		
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->