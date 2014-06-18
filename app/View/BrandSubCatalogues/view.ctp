<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Sub Katalog Brand <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/brand_sub_catalogues"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/brand_sub_catalogues/add"; ?>">Tambah Sub Katalog Brand</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($brandSubCatalogue['BrandSubCatalogue']['name']); ?> 
		</p>
		
		<h4>Brand</h4>
		
		<p>
			<?php echo $this->Html->link($brands['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $brands['Brand']['id'])); ?> 
		</p>
		
		<h4>Katalog Brand</h4>
		
		<p>
			<?php echo $this->Html->link($brandSubCatalogue['BrandCatalogue']['name'], array('controller' => 'brand_catalogues', 'action' => 'view', $brandSubCatalogue['BrandCatalogue']['id'])); ?> 
		</p>
		
		<h4>Publish</h4>
		
		<p>
			<?php echo ($brandSubCatalogue['BrandSubCatalogue']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->