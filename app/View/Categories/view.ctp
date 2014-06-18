<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Kategori</h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/categories"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/categories/add"; ?>">Tambah Kategori</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($category['Category']['name']); ?> 
		</p>
		
		<h4>Publish</h4>
		
		<p>
			<?php echo ($category['Category']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
		
		<h4>Gambar</h4>
		
		<p>
			<?php echo $this->Html->image('kategori/'.$category['Category']['pict'], 
										array(
											'title' => h($category['Category']['name']),
											'alt' => h($category['Category']['name']),
											'width' => '316px',
											'height' => '246px',
											)
										); ?> 
		</p>
		
		<h4>Gambar Grayscale</h4>
		
		<p>
			<?php echo $this->Html->image('kategori/grayscale/'.$category['Category']['pict'], 
										array(
											'title' => h($category['Category']['name']),
											'alt' => h($category['Category']['name']),
											'width' => '316px',
											'height' => '246px',
											)
										); ?> 
		</p>
		
		<h4>Gambar Panjang</h4>
		
		<p>
			<?php echo $this->Html->image('kategori/'.$category['Category']['long_pict'], 
										array(
											'title' => h($category['Category']['name']),
											'alt' => h($category['Category']['name']),
											'width' => '550px',
											'height' => '246px',
											)
										); ?> 
		</p>
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->