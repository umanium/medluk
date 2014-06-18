<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Tambah Kategori</h2>
		
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
		
		<?php echo $this->Form->create('Category', array('type' => 'file'));?>
		
		<!-- Text Input: Start -->	
		<div class="field">
			<?php
			echo $this->Form->input('name', array(
						'label' => 'Nama', 
						'title' => 'Nama Kategori', 
						'class' => 'medium validate tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>

		<div class="field">
			<?php
			echo $this->Form->input('pict', array(
						'label' => 'Gambar', 
						'title' => 'Gambar Background Kategori', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
			<span>maximum file size 500 KB JPEG, PNG, GIF size 316 x 246 px</span>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('long_pict', array(
						'label' => 'Gambar Panjang', 
						'title' => 'Gambar Panjang Kategori', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
			<span>maximum file size 1 MB JPEG, PNG, GIF size 550 x 246 px</span>
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
			<button>Submit</button>
		</div>
		<!-- Text Input: End -->
		
		<?php echo $this->Form->end();?>
		
	</div>
	<!-- Box Content: End -->
	
</div>	
<!-- 50% Box Grid Container: End -->