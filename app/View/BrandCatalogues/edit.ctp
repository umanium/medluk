<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Edit Katalog Brand <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
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
		
		<?php echo $this->Form->create('BrandCatalogue', array('type' => 'file'));?>
		
		<!-- Text Input: Start -->	
		<div class="field">
			<?php
			echo $this->Form->input('name', array(
						'label' => 'Nama', 
						'title' => 'Nama Katalog Brand', 
						'class' => 'medium validate tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('brand_id', array(
						'label' => 'Brand', 
						'title' => 'Brand',
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>

		<div class="field">
			<?php
			echo $this->Form->input('pict_baru', array(
						'label' => 'Gambar', 
						'title' => 'Gambar Katalog Brand Baru', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('pict', array(
						'type' => 'hidden',
						)
			);
			?>
			<span>maximum file size 400 KB JPEG, PNG, GIF size 217 x 227 px</span>
		</div>
		
		<div class="field">
			<?php
			$sizes = array('y' => 'Ya', 't' => 'Tidak');
			echo $this->Form->input('publish', array(
						'label' => 'Publish', 
						'class' => 'medium',
						'options' => $sizes,
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<button>Submit</button>
		</div>
		<!-- Text Input: End -->
		
		<?php echo $this->Form->end();?>
		
	</div>
	<!-- Box Content: End -->
	
</div>	
<!-- 50% Box Grid Container: End -->