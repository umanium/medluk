<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Detail Brand <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/brands"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/brands/add"; ?>">Tambah Brand</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<h4>Nama</h4>
		
		<p>
			<?php echo h($brand['Brand']['name']); ?> 
		</p>
		
		<h4>Publish</h4>
		
		<p>
			<?php echo ($brand['Brand']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>
		</p>
		
		<h4>Gambar</h4>
		
		<p>
			<?php echo $this->Html->image('brand/'.$brand['Brand']['pict'], 
										array(
											'title' => h($brand['Brand']['name']),
											'alt' => h($brand['Brand']['name']),
											'width' => '148px',
											'height' => '72px',
											)
										); ?> 
		</p>
		
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 50% Box Grid Container: End -->