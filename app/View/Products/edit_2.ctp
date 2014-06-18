<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Edit Produk #2 <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
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
			
			echo $this->Form->input('sub_pict1_baru', array(
						'label' => 'Gambar', 
						'title' => 'Gambar 1', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			
			echo $this->Form->input('sub_pict2_baru', array(
						'label' => '', 
						'title' => 'Gambar 2', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('sub_pict3_baru', array(
						'label' => '', 
						'title' => 'Gambar 3', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('sub_pict4_baru', array(
						'label' => '', 
						'title' => 'Gambar 4', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('sub_pict1', array(
						'type' => 'hidden',
						)
			);
			echo $this->Form->input('sub_pict2', array(
						'type' => 'hidden',
						)
			);
			echo $this->Form->input('sub_pict3', array(
						'type' => 'hidden',
						)
			);
			echo $this->Form->input('sub_pict4', array(
						'type' => 'hidden',
						)
			);
			?>
			<span>maximum file size 500 KB JPEG, PNG, GIF size 395 x 537 px</span>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('colour_baru', array(
						'label' => 'Warna', 
						'title' => 'File ZIP untuk Warna',
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
			<span>maximum file size 7 MB, ZIP File</span>
		</div>

		<div class="field">
			<?php
			echo $this->Form->input('colour_pdf_baru', array(
						'label' => 'Warna PDF', 
						'title' => 'File PDF untuk warna', 
						'class' => 'medium tip-stay',
						'type' => 'file',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			echo $this->Form->input('colour_pdf', array(
						'type' => 'hidden',
						)
			);
			?>
			<span>maximum file size 7 MB, PDF File</span>
		</div>
		
		<div class="field">
			
			
			
		</div>

		<div class="field">
			<label><span class="icon search"></span>
				Produk Terkait 1
			</label>
		</div>
		<div class="field">
			<?php
			echo $this->Form->input('kategori_terkait1', array(
					'label' => 'Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categories
					)
			);
			
			echo $this->Form->input('sub_kategori_terkait1', array(
					'label' => 'Sub Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categorySubs
					)
			);

			echo $this->Form->input('product_terkait1', array(
					'label' => 'Produk Terkait 1', 
					'class' => 'medium',
					'options' => $products
					)
			);
			
			?>
			<!--<div class="box_radio" id="box_radio1">-->
				<?php
				/*for($i = 0; $i < count($produkTerkait); $i++){
					?>
					
					<input type="radio" <?php echo ($this->request->data['Product']['product_terkait1'] == $produkTerkait[$i]['Product']['id'])? 'checked="checked"' : ''; ?>  name="data[Product][product_terkait1]" value="<?php echo $produkTerkait[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$produkTerkait[$i]['Product']['main_pict'], 
									array(
										'title' => $produkTerkait[$i]['Product']['name'],
										'alt' => $produkTerkait[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			<!--</div>-->
			<span>Pilih salah satu produk yang terkait</span>
			
		</div>

		<div class="field">
			<label><span class="icon search"></span>
				Produk Terkait 2
			</label>
		</div>
		<div class="field">
			<?php
			echo $this->Form->input('kategori_terkait2', array(
					'label' => 'Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categories
					)
			);
			
			echo $this->Form->input('sub_kategori_terkait2', array(
					'label' => 'Sub Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categorySubs
					)
			);

			echo $this->Form->input('product_terkait2', array(
					'label' => 'Produk Terkait 2', 
					'class' => 'medium',
					'options' => $products
					)
			);
			
			?>
			<!--<div class="box_radio" id="box_radio2">-->
				<?php
				/*for($i = 0; $i < count($produkTerkait); $i++){
					?>
					
					<input type="radio" <?php echo ($this->request->data['Product']['product_terkait2'] == $produkTerkait[$i]['Product']['id'])? 'checked="checked"' : ''; ?> name="data[Product][product_terkait2]" value="<?php echo $produkTerkait[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$produkTerkait[$i]['Product']['main_pict'], 
									array(
										'title' => $produkTerkait[$i]['Product']['name'],
										'alt' => $produkTerkait[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			<!--</div>-->
			<span>Pilih salah satu produk yang terkait</span>
			
		</div>
		
		<div class="field">
			<label>Tutorial 1</label>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial1]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial1]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<span style="clear: both;">Tutorial dari naskah atau dari video</span>
		</div>
		
		<div class="field">
			<label>Tutorial 2</label>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial2]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial2]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<span style="clear: both;">Tutorial dari naskah atau dari video</span>
		</div>
		
		<div class="field">
			<label>Tutorial 3</label>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial3]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<div class="box_radio_tutor">
				<?php
				/*for($i = 0; $i < count($tutorial); $i++){
					?>
					
					<input type="radio" name="data[Product][tutorial3]" value="<?php echo $tutorial[$i]['Product']['id']; ?>" />
					
					<?php
					
					echo $this->Html->image('produk/main/'.$tutorial[$i]['Product']['main_pict'], 
									array(
										'title' => $tutorial[$i]['Product']['name'],
										'alt' => $tutorial[$i]['Product']['name'],
										'width' => '50px',
										'height' => '50px',
										)
									);
									
				}*/
				?>
			</div>
			<span style="clear: both;">Tutorial dari naskah atau dari video</span>
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