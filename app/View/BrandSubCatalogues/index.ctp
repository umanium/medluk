<!-- 100% Box Grid Container: Start -->
<div class="grid_17">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon frames">Sub Katalog Brand <!-- <span class="tip" title="Tips can be added everywhere">254</span> --></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="<?php echo $this->base."/brand_sub_catalogues"; ?>">List</a></li>
			<li><a href="<?php echo $this->base."/brand_sub_catalogues/add"; ?>">Tambah Sub Katalog Brand</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- News Table Tabs: Start -->
		<div class="tabs">
			
			<!-- News Sorting Table: Start -->
			<div id="listing">
			
				<div class="dataTables_wrapper">
					<div class="dataTables_filter">
						<form method="post" action="<?php echo $this->base."/brand_sub_catalogues"; ?>">
						Search: <input type="text" name="search">
						<?php
						echo $this->Html->link('Refresh', 
								array('controller' => 'brand_sub_catalogues', 'action' => 'index'), 
								array('class' => 'button refresh_search')
								); 
						?>
						</form>
					</div>
					
					<!-- Simple Sorting Table + Pagination: Start -->
					<table>
						<thead>
							<tr>
								<th class="align_left"><?php echo $this->Paginator->sort('BrandSubCatalogue.name', 'Nama');?></th>
								<th class="align_left center"><?php echo $this->Paginator->sort('BrandCatalogue.name', 'Katalog');?></th>
								<th class="align_left center"><?php echo $this->Paginator->sort('BrandSubCatalogue.publish', 'Publish');?></th>
								<th class="align_left center tools">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($brandSubCatalogues as $hasil): ?>
							<tr class="gradeA">
								<td class="align_left"><?php echo h($hasil['BrandSubCatalogue']['name']); ?>&nbsp;</td>
								<td class="align_left center"><?php echo h($hasil['BrandCatalogue']['name']); ?>&nbsp;</td>
								<td class="align_left center"><?php echo ($hasil['BrandSubCatalogue']['publish'] == 'y')? 'Ya' : 'Tidak' ; ?>&nbsp;</td>
								<td class="align_left tools center sorting">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $hasil['BrandSubCatalogue']['id']), array('class' => 'view tip', 'title' => 'view')); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hasil['BrandSubCatalogue']['id']), array('class' => 'edit tip', 'title' => 'edit')); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hasil['BrandSubCatalogue']['id']), array('class' => 'delete tip', 'title' => 'delete'), __('Anda yakin akan menghapus sub katalog brand # %s?', $hasil['BrandSubCatalogue']['name'])); ?>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					<!-- Plain Table: End -->
					
					<div class="dataTables_info">
						<?php
						echo $this->Paginator->counter(array(
						'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
						));
						?>
					</div>
					
					<div class="dataTables_paginate paging_full_numbers">
						<?php
						echo $this->Paginator->first(__('First'), array('class' => 'first paginate_button'));
						echo $this->Paginator->prev(__('Previous'), array('class' => 'previous paginate_button'), null, array('class' => 'previous paginate_button paginate_button_disabled'));
						?>
						<span>
							<?php 
							echo $this->Paginator->numbers(array('separator' => '', 'class' => 'paginate_button', 'currentClass' => 'paginate_active')); 
							?>
						</span>
						<?php
						echo $this->Paginator->next(__('Next'), array('class' => 'next paginate_button'), null, array('class' => 'next paginate_button paginate_button_disabled'));
						echo $this->Paginator->last(__('Last'), array('class' => 'last paginate_button'));
						?>
					</div>
					
				</div>
		
			</div>
			
		</div>
		
	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 100% Box Grid Container: End -->