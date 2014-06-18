<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Tambah Selling Unit <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<?php echo $this->Form->create('SellingUnit');?>
		
		<!-- Text Input: Start -->
		<div class="field">
			<?php
			echo $this->Form->input('item_number', array(
						'label' => 'Item Number', 
						'title' => 'Item Number',
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
			
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
						'id' => 'page',
						'value' => $page,
						)
			);
			
			echo $this->Form->input('product_id', array(
						'type' => 'hidden',
						'id' => 'ProductId',
						'value' => $id,
						)
			);
			
			echo $this->Form->input('name', array(
						'label' => 'Nama', 
						'title' => 'Nama Selling Unit', 
						'class' => 'medium validate tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('size', array(
						'label' => 'Ukuran', 
						'title' => 'Ukuran Selling Unit', 
						'class' => 'medium tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('old_price', array(
						'label' => 'Harga Lama', 
						'title' => 'Masukkan angka saja', 
						'class' => 'medium tip-stay',
						'type' => 'text',
						'placeholder' => 'Rupiah...',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('new_price', array(
						'label' => 'Harga Baru', 
						'title' => 'Masukkan angka saja', 
						'class' => 'medium tip-stay',
						'type' => 'text',
						'placeholder' => 'Rupiah...',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('discount', array(
						'label' => 'Diskon', 
						'title' => 'Diskon Selling Unit', 
						'class' => 'medium tip-stay', 
						'type' => 'text',
						'placeholder' => 'Persen...',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<label>
				<span class="icon search"></span>
				Pilih Warna
			</label>
			<div class="box_radio">
				<?php
				for($i = 0; $i < count($colours); $i++){
					?>
					
					<input type="checkbox" name="data[SellingUnit][colour][]" value="<?php echo $colours[$i]['Colour']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/warna/'.$colours[$i]['Colour']['pict'], 
									array(
										'title' => $colours[$i]['Colour']['code'].' '.$colours[$i]['Colour']['name'],
										'alt' => $colours[$i]['Colour']['code'].' '.$colours[$i]['Colour']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}
				?>
			</div>
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