<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Edit Produk #1 <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
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
		
		<?php echo $this->Form->create('Product', array('type' => 'file'));?>
		
		<!-- Text Input: Start -->	
		<div class="field">
			<?php
			echo $this->Form->input('base_url', array(
						'type' => 'hidden',
						'id' => 'baseUrl',
						'value' => $this->base
						)
			);
			
			echo $this->Form->input('page', array(
						'type' => 'hidden',
						'value' => '1',
						)
			);
			
			echo $this->Form->input('name', array(
						'label' => 'Nama', 
						'title' => 'Nama Produk', 
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
						'title' => 'Brand Produk',
						'default' => 'null',
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>

		<div class="field">
			<?php
			echo $this->Form->input('brand_catalogue_id', array(
						'label' => 'Katalog Brand', 
						'title' => 'Katalog Brand Produk', 
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('brand_sub_catalogue_id', array(
						'label' => 'Sub Katalog Brand', 
						'title' => 'Sub Katalog Brand Produk', 
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('category_id', array(
						'label' => 'Kategori',
						'title' => 'Kategori Produk',  
						'class' => 'medium tip-stay',
						'default' => 'null',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('category_sub_id', array(
						'label' => 'Sub Kategori',
						'title' => 'Sub Kategori Produk',  
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('desc', array(
						'label' => 'Deskripsi',
						'title' => 'Deskripsi Produk',  
						'class' => 'tip-stay',
						'type' => 'textarea',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			$template = array(
							'Cat' => 'Cat', 
							'Brush' => 'Brush', 
							'Easel' => 'Easel', 
							'Hobby & Craft Cat' => 'Hobby & Craft Cat', 
							'Hobby & Craft Brush' => 'Hobby & Craft Brush', 
							'Hobby & Craft Easel' => 'Hobby & Craft Easel', 
							'Hobby & Craft Aksesoris' => 'Hobby & Craft Aksesoris', 
							'Aksesoris' => 'Aksesoris'
							);
							
			echo $this->Form->input('template', array(
						'label' => 'template',
						'title' => 'Template Produk',  
						'class' => 'medium tip-stay',
						'options' => $template,
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('main_pict_baru', array(
						'label' => 'Gambar Utama',
						'title' => 'Gambar Utama Produk',  
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('main_pict', array(
						'type' => 'hidden'
						)
			);
			?>
			<span>maximum file size 500 KB JPEG, PNG, GIF size 224 x 300 px. Transparent background image</span>
		</div>

		<div class="field">
			<?php
			$sizes = array('y' => 'Ya', 't' => 'Tidak');
			echo $this->Form->input('publish', array(
						'label' => 'Publish', 
						'class' => 'medium',
						'options' => $sizes,
						'default' => 'y',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<button>Selanjutnya</button>
		</div>
		<!-- Text Input: End -->
		
		<?php echo $this->Form->end();?>
		
	</div>
	<!-- Box Content: End -->
	
</div>	
<!-- 50% Box Grid Container: End -->