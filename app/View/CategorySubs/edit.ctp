<!-- 50% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Edit Sub Kategori</h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/category_subs"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/category_subs/add"; ?>">Tambah Sub Kategori</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<?php echo $this->Form->create('CategorySub', array('type' => 'file'));?>
		
		<!-- Text Input: Start -->	
		<div class="field">
			<?php
			echo $this->Form->input('base_url', array(
						'type' => 'hidden',
						'id' => 'baseUrl',
						'value' => $this->base
						)
			);
				
			echo $this->Form->input('name', array(
						'label' => 'Nama', 
						'title' => 'Nama Sub Kategori', 
						'class' => 'medium validate tip-stay',
						'error' => array('attributes' => array('wrap' => 'p', 'class' => 'error right small'))
						)
			);
			?>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('category_id', array(
						'label' => 'Kategori', 
						'title' => 'Kategori', 
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
						'title' => 'Gambar Background Sub Kategori Baru', 
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
			<span>maximum file size 500 KB JPEG, PNG, GIF size 950 x 490 px</span>
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
			<label>
				<span class="icon search"></span>
				Produk Terkait
			</label>
		</div>
		
		<div class="field">
			<?php
			echo $this->Form->input('Kategori', array(
					'label' => 'Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categories
					)
			);
			
			echo $this->Form->input('SubKategori', array(
					'label' => 'Sub Kategori', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $categorySubs
					)
			);
			
			echo $this->Form->input('Produk', array(
					'label' => 'Produk', 
					'class' => 'medium',
					'type' => 'select',
					'options' => $products
					)
			);
			?>
			<button type="button" id="tambahProdukButton">Tambah</button>
			
			<table>
				<thead>
					<tr>
						<th class="align_left center">No</th>
						<th class="align_left center">Produk</th>
						<th class="align_left center tools">Aksi</th>
					</tr>
				</thead>
				<tbody id="barisProdukTerkait">
					<input type="hidden" id="no_urut" value="<?php echo (count($produkTerkait)+1); ?>">
					
					<?php
					for($i = 0; $i < count($produkTerkait); $i++){
						?>
						<tr class="gradeA" id="row<?php echo ($i+1); ?>">
							<td class="align_left center"><?php echo ($i+1); ?></td>
							<td class="align_left center"><input type="hidden" name="data[CategorySub][product][]" value="<?php echo $produkTerkait[$i]['CategorySubsProduct']['product_id']; ?>"><?php echo $produkTerkait[$i]['Product']['name']; ?></td>
							<td class="align_left tools center sorting">
							<button type="button" onclick="deleteProdukTerkait('row<?php echo ($i+1); ?>')" style="opacity: 0; ">
								Hapus
							</button>
							</td>
						</tr>
						<?php
					}
					?>
					
				</tbody>
			</table>
			
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