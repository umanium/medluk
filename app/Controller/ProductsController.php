<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 */
class ProductsController extends AppController {

var $helpers = array('Js', 'Html');
var $layout = 'admin_katalog';
var $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('title_for_layout', 'Produk - Katalog');
		$this->set('page_katalog', 'produk');
		
		if ($this->request->is('post')) {
			$search = $this->request->data['search'];
		} else {
			$search = null;
		}
		$this->uses = array(
						'Product', 
						'Brand', 
						'Category', 
						'CategorySub', 
						'BrandCatalogue', 
						'BrandSubCatalogue'
						);
		
		$this->paginate = array(
	        'limit' => 10,
	        'fields' => array(
	        				'Product.id', 
	        				'Product.name', 
	        				'Brand.name', 
	        				'Category.name'
							),
			'joins' => array('
							LEFT JOIN category_subs AS CategorySubs ON (Product.category_sub_id = CategorySubs.id) 
							LEFT JOIN categories AS Category ON (CategorySubs.category_id = Category.id) 
							LEFT JOIN brand_sub_catalogues AS BrandSubCatalogues ON (Product.brand_sub_catalogue_id = BrandSubCatalogues.id) 
							LEFT JOIN brand_catalogues AS BrandCatalogue ON (BrandSubCatalogues.brand_catalogue_id = BrandCatalogue.id) 
							LEFT JOIN brands AS Brand ON (BrandCatalogue.brand_id = Brand.id) 
							')
	    );
		
		$this->Product->recursive = 1;
		$this->set('products', $this->paginate('Product', array(
			'or'=> array(
			    array("Product.name LIKE" => '%'.$search.'%')
			)
			)));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Detail Produk - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->uses = array(
						'Product', 
						'Brand', 
						'Category', 
						'CategorySub', 
						'BrandCatalogue', 
						'BrandSubCatalogue',
						'SellingUnit',
						'SellingUnitsColour'
						);
						
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$product = $this->Product->read(null, $id);
		
		$this->Product->recursive = -1;
		$produkTerkait1 = $this->Product->find('first', array(
							'fields' => array('Product.id', 'Product.name'),
							'conditions' => array('Product.id' => $product['Product']['product_terkait1'])
							));
							
		$produkTerkait2 = $this->Product->find('first', array(
							'fields' => array('Product.id', 'Product.name'),
							'conditions' => array('Product.id' => $product['Product']['product_terkait2'])
							));
		
		$this->SellingUnit->recursive = -1;
		$selling_units = $this->SellingUnit->find('all', array(
							'fields' => array('SellingUnit.id', 'SellingUnit.name', 'SellingUnit.old_price', 'SellingUnit.new_price', 'count(SellingUnitsColour.id) as "set"', 'SellingUnit.item_number'),
							'joins' => array('LEFT JOIN selling_units_colours as SellingUnitsColour ON(SellingUnit.id = SellingUnitsColour.selling_unit_id)'),
							'group' => array('SellingUnitsColour.selling_unit_id'),
							'conditions' => array('SellingUnit.product_id' => $id)
							));
		
		$this->set(compact('product', 'produkTerkait1', 'produkTerkait2', 'selling_units'));
	}

/**
 * add#1 method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Tambah Produk#1 - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->uses = array(
						'Product', 
						'Brand', 
						'Category', 
						'CategorySub', 
						'BrandCatalogue', 
						'BrandSubCatalogue'
						);
		
		if ($this->request->is('post')) {
			$this->Product->create();
			
			if ($this -> request -> data['Product']['main_pict']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Product']['main_pict']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Product']['main_pict']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['main_pict'] = $unique_name;
			} else {
				$this -> request -> data['Product']['main_pict'] = null;
			}
			
			if ($this->Product->save($this->request->data)) {
				
				if($this -> request -> data['Product']['main_pict']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/produk/main', $temp);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				$this->Session->setFlash(__('The product has been saved'), 'flash_success');
				$this->redirect(array('action' => 'add_2', $this->Product->getInsertID()));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'flash_error');
			}
		}
		
		$brands = $this->Brand->find('list');
		$brands['null'] = '-- Pilih Brand --';
		$brandCatalogues = array(
								'' => '-- Pilih Katalog Brand --'
								);
		
		$brandSubCatalogues = array(
								'' => '-- Pilih Sub Katalog Brand --'
								);
		
		$categories = $this->Category->find('list');
		$categories['null'] = '-- Pilih Kategori --';
		$categorySubs = array(
								'' => '-- Pilih Sub Kategori --'
								);
		
		$this->set(compact('brands', 'brandCatalogues', 'brandSubCatalogues', 'categories', 'categorySubs'));
	}

/**
 * add#2 method
 *
 * @return void
 */
	public function add_2($id = null) {
		$this->set('title_for_layout', 'Tambah Produk#2 - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->uses = array(
						'Product', 
						'Brand', 
						'Colour',
						'ColoursProduct',
						'Category'
						);
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		if ($this->request->is('post')) {
			
			if ($this -> request -> data['Product']['sub_pict1']['name'] != "") {
				$file_type1 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict1']['name']);
				$unique_name1 = rand(100, 999) . $this -> Image -> get_unique_name($file_type1);
				$temp1 = $this -> request -> data['Product']['sub_pict1']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['sub_pict1'] = $unique_name1;
			} else {
				$this -> request -> data['Product']['sub_pict1'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict2']['name'] != "") {
				$file_type2 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict2']['name']);
				$unique_name2 = rand(100, 999) . $this -> Image -> get_unique_name($file_type2);
				$temp2 = $this -> request -> data['Product']['sub_pict2']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['sub_pict2'] = $unique_name2;
			} else {
				$this -> request -> data['Product']['sub_pict2'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict3']['name'] != "") {
				$file_type3 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict3']['name']);
				$unique_name3 = rand(100, 999) . $this -> Image -> get_unique_name($file_type3);
				$temp3 = $this -> request -> data['Product']['sub_pict3']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['sub_pict3'] = $unique_name3;
			} else {
				$this -> request -> data['Product']['sub_pict3'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict4']['name'] != "") {
				$file_type4 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict4']['name']);
				$unique_name4 = rand(100, 999) . $this -> Image -> get_unique_name($file_type4);
				$temp4 = $this -> request -> data['Product']['sub_pict4']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['sub_pict4'] = $unique_name4;
			} else {
				$this -> request -> data['Product']['sub_pict4'] = null;
			}
			
			if ($this -> request -> data['Product']['colour']['name'] != "") {
				$file_type5 = $this -> Image -> get_file_type($this -> request -> data['Product']['colour']['name']);
				$unique_name5 = rand(100, 999) . $this -> Image -> get_unique_name($file_type5);
				$temp5 = $this -> request -> data['Product']['colour']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['colour'] = $unique_name5;
			} else {
				$this -> request -> data['Product']['colour'] = null;
			}
			
			if ($this -> request -> data['Product']['colour_pdf']['name'] != "") {
				$file_type6 = $this -> Image -> get_file_type($this -> request -> data['Product']['colour_pdf']['name']);
				$unique_name6 = rand(100, 999) . $this -> Image -> get_unique_name($file_type6);
				$temp6 = $this -> request -> data['Product']['colour_pdf']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['colour_pdf'] = $unique_name6;
			} else {
				$this -> request -> data['Product']['colour_pdf'] = null;
			}
			
			if ($this->Product->save($this->request->data)) {
				
				if($this -> request -> data['Product']['sub_pict1']){
					$this -> Image -> copy_file($unique_name1, $file_type1, 'img/produk/sub', $temp1);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				if($this -> request -> data['Product']['sub_pict2']){
					$this -> Image -> copy_file($unique_name2, $file_type2, 'img/produk/sub', $temp2);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				if($this -> request -> data['Product']['sub_pict3']){
					$this -> Image -> copy_file($unique_name3, $file_type3, 'img/produk/sub', $temp3);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				if($this -> request -> data['Product']['sub_pict4']){
					$this -> Image -> copy_file($unique_name4, $file_type4, 'img/produk/sub', $temp4);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}

				if($this -> request -> data['Product']['colour']){
					$this -> Image -> copy_file($unique_name5, $file_type5, 'img/produk/warna', $temp5);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
					
					$path = 'img/produk/warna/'.$unique_name5;
			
					$zip = new ZipArchive;
					if ($zip->open($path) === true) {
					                    
					    for($i = 0; $i < $zip->numFiles; $i++) {
		                 	$filename = $zip->getNameIndex($i);
							//echo $filename;
							$fileinfo = pathinfo($filename);
							//debug($fileinfo);
							$fileTemp = explode(' ', $fileinfo['filename']);
							$fileTemp[0] = str_replace("_", " ", $fileTemp[0]);
							//debug($fileTemp);
							$key = '';
							for ($int=2; $int < count($fileTemp); $int++) { 
								$key = $key.' '.$fileTemp[$int];
							}
							//echo count($fileTemp).'<br />'.$key;
							//die;
							$colour = array(
										'code' => $fileTemp[1],
										'name' => $fileTemp[0],
										'key' => $key,
										'pict' => $filename
										);
										
							if($this->Colour->saveAll($colour)){
								
								$prodCol = array(
											'product_id' => $id,
											'colour_id' => $this->Colour->getInsertID() 
											);
											
								if($this->ColoursProduct->saveAll($prodCol)){
									//echo 'save<br />';
								} else {
									echo 'tak save all colour product';
									die;
								}
								
							} else {
								echo 'tak save all colour';
								die;
							}
							
					        $zip->extractTo('img/produk/warna/', array($filename));
							
					    }
						
					    $zip->close();
					    $this->Image->remove_file($unique_name5, 'img/produk/warna');
						
						//debug($colour); 
					} else {
						echo 'gagal zip';
						die;
					}
					
				}

				if($this -> request -> data['Product']['colour_pdf']){
					$this -> Image -> copy_file($unique_name6, $file_type6, 'img/produk/pdf', $temp6);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				$this->Session->setFlash(__('The product has been saved'), 'flash_success');
				$this->redirect(array('action' => 'add_3', $id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'flash_error');
			}
		}
		
		$this->Product->recursive = -1;
		$category_sub = $this->Product->find('first', array(
							'conditions' => array('Product.id' => $id),
							'fields' => array('Product.category_sub_id')
							));
							
		$produkTerkait = $this->Product->find('all', array(
								'fields' => array('id', 'name', 'main_pict'),
								'conditions' => array(
												//'Product.category_sub_id' => $category_sub['Product']['category_sub_id'],
												'Product.id !=' => $id,
												)
								));
		
		$tutorial = $this->Product->find('all', array(
								'fields' => array('id', 'name', 'main_pict'),
								'conditions' => array(
												'Product.category_sub_id' => $category_sub['Product']['category_sub_id'],
												'Product.id !=' => $id,
												)
							));
		
		$categories = $this->Category->find('list');
		$categorySubs = array(
							'' => '-- Pilih Sub Kategori --'
							);

		$products = array(
							'' => '-- Pilih Produk --'
							);

		$this->set(compact('produkTerkait', 'tutorial', 'categories', 'categorySubs', 'products'));
		
	}

/**
 * add#3 method
 *
 * @return void
 */
	public function add_3($id = null) {
		$this->set('title_for_layout', 'Tambah Produk - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$this->uses = array(
						'SellingUnit',
						'SellingUnitsColour'
						);
						
		$this->SellingUnit->recursive = -1;
		$selling_units = $this->SellingUnit->find('all', array(
							'fields' => array('SellingUnit.id', 'SellingUnit.name', 'SellingUnit.old_price', 'SellingUnit.new_price', 'count(SellingUnitsColour.id) as "set"', 'SellingUnit.discount'),
							'joins' => array('LEFT JOIN selling_units_colours as SellingUnitsColour ON(SellingUnit.id = SellingUnitsColour.selling_unit_id)'),
							'group' => array('SellingUnitsColour.selling_unit_id'),
							'conditions' => array('SellingUnit.product_id' => $id)
							));
		$this->set(compact('selling_units', 'id'));
	}


/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Produk#1 - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$this->uses = array(
						'Product', 
						'Brand', 
						'Category', 
						'CategorySub', 
						'BrandCatalogue', 
						'BrandSubCatalogue'
						);
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['Product']['main_pict_baru']['name'] != "") {
				$file_type = $this -> Image -> get_file_type($this -> request -> data['Product']['main_pict_baru']['name']);
				$unique_name = rand(100, 999) . $this -> Image -> get_unique_name($file_type);
				$temp = $this -> request -> data['Product']['main_pict_baru']['tmp_name'];
				$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['main_pict'] = $unique_name;
			} else {
				$this -> request -> data['Product']['main_pict_baru'] = null;
			}
			
			if ($this->Product->save($this->request->data)) {
				
				if($this -> request -> data['Product']['main_pict_baru']){
					$this -> Image -> copy_file($unique_name, $file_type, 'img/produk/main', $temp);
					$this->Image->remove_file($gbr_dulu, 'img/produk/main');
				}
				
				$this->Session->setFlash(__('The product has been saved'), 'flash_success');
				$this->redirect(array('action' => 'edit_2', $id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		
		$brands = $this->Brand->find('list');
		$brandCatalogues = $this->BrandCatalogue->find('list');
		$brandSubCatalogues = $this->Product->BrandSubCatalogue->find('list');
		$categories = $this->Category->find('list');
		$categorySubs = $this->Product->CategorySub->find('list');
		$colours = $this->Product->Colour->find('list');
		
		$this->set(compact('brands', 'brandCatalogues', 'brandSubCatalogues', 'categories', 'categorySubs', 'categorySubs', 'colours'));
	}

/**
 * edit#2 method
 *
 * @return void
 */
	public function edit_2($id = null) {
		$this->set('title_for_layout', 'Edit Produk#2 - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->uses = array(
						'Product', 
						'Brand', 
						'Colour',
						'ColoursProduct',
						'Category'
						);
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this -> request -> data['Product']['sub_pict1_baru']['name'] != "") {
				$file_type1 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict1_baru']['name']);
				$unique_name1 = rand(100, 999) . $this -> Image -> get_unique_name($file_type1);
				$temp1 = $this -> request -> data['Product']['sub_pict1_baru']['tmp_name'];
				$gbr_dulu1 = $this -> request -> data['Product']['sub_pict1'];
				$this -> request -> data['Product']['sub_pict1'] = $unique_name1;
			} else {
				$this -> request -> data['Product']['sub_pict1_baru'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict2_baru']['name'] != "") {
				$file_type2 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict2_baru']['name']);
				$unique_name2 = rand(100, 999) . $this -> Image -> get_unique_name($file_type2);
				$temp2 = $this -> request -> data['Product']['sub_pict2_baru']['tmp_name'];
				$gbr_dulu2 = $this -> request -> data['Product']['sub_pict2'];
				$this -> request -> data['Product']['sub_pict2'] = $unique_name2;
			} else {
				$this -> request -> data['Product']['sub_pict2_baru'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict3_baru']['name'] != "") {
				$file_type3 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict3_baru']['name']);
				$unique_name3 = rand(100, 999) . $this -> Image -> get_unique_name($file_type3);
				$temp3 = $this -> request -> data['Product']['sub_pict3_baru']['tmp_name'];
				$gbr_dulu3 = $this -> request -> data['Product']['sub_pict3'];
				$this -> request -> data['Product']['sub_pict3'] = $unique_name3;
			} else {
				$this -> request -> data['Product']['sub_pict3_baru'] = null;
			}
			
			if ($this -> request -> data['Product']['sub_pict4_baru']['name'] != "") {
				$file_type4 = $this -> Image -> get_file_type($this -> request -> data['Product']['sub_pict4_baru']['name']);
				$unique_name4 = rand(100, 999) . $this -> Image -> get_unique_name($file_type4);
				$temp4 = $this -> request -> data['Product']['sub_pict4_baru']['tmp_name'];
				$gbr_dulu4 = $this -> request -> data['Product']['sub_pict4'];
				$this -> request -> data['Product']['sub_pict4'] = $unique_name4;
			} else {
				$this -> request -> data['Product']['sub_pict4_baru'] = null;
			}
			
			if ($this -> request -> data['Product']['colour_baru']['name'] != "") {
				$file_type5 = $this -> Image -> get_file_type($this -> request -> data['Product']['colour_baru']['name']);
				$unique_name5 = rand(100, 999) . $this -> Image -> get_unique_name($file_type5);
				$temp5 = $this -> request -> data['Product']['colour_baru']['tmp_name'];
				//$gbr_dulu = $this -> request -> data['Product']['main_pict'];
				$this -> request -> data['Product']['colour_baru'] = $unique_name5;
			} else {
				$this -> request -> data['Product']['colour_baru'] = null;
			}
			
			if ($this -> request -> data['Product']['colour_pdf_baru']['name'] != "") {
				$file_type6 = $this -> Image -> get_file_type($this -> request -> data['Product']['colour_pdf_baru']['name']);
				$unique_name6 = rand(100, 999) . $this -> Image -> get_unique_name($file_type6);
				$temp6 = $this -> request -> data['Product']['colour_pdf_baru']['tmp_name'];
				$gbr_dulu6 = $this -> request -> data['Product']['colour_pdf'];
				$this -> request -> data['Product']['colour_pdf'] = $unique_name6;
			} else {
				$this -> request -> data['Product']['colour_pdf_baru'] = null;
			}

			if ($this->Product->save($this->request->data)) {
				
				if($this -> request -> data['Product']['sub_pict1_baru']){
					$this -> Image -> copy_file($unique_name1, $file_type1, 'img/produk/sub', $temp1);
					$this->Image->remove_file($gbr_dulu1, 'img/produk/sub');
				}
				
				if($this -> request -> data['Product']['sub_pict2_baru']){
					$this -> Image -> copy_file($unique_name2, $file_type2, 'img/produk/sub', $temp2);
					$this->Image->remove_file($gbr_dulu2, 'img/produk/sub');
				}
				
				if($this -> request -> data['Product']['sub_pict3_baru']){
					$this -> Image -> copy_file($unique_name3, $file_type3, 'img/produk/sub', $temp3);
					$this->Image->remove_file($gbr_dulu3, 'img/produk/sub');
				}
				
				if($this -> request -> data['Product']['sub_pict4_baru']){
					$this -> Image -> copy_file($unique_name4, $file_type4, 'img/produk/sub', $temp4);
					$this->Image->remove_file($gbr_dulu4, 'img/produk/sub');
				}

				if($this -> request -> data['Product']['colour_baru']){
					$this -> Image -> copy_file($unique_name5, $file_type5, 'img/produk/warna', $temp5);
					//$this->Image->remove_file($gbr_dulu, 'img/produk/warna');
					
					$path = 'img/produk/warna/'.$unique_name5;
			
					$zip = new ZipArchive;
					if ($zip->open($path) === true) {
					                    
					    for($i = 0; $i < $zip->numFiles; $i++) {
		                 	$filename = $zip->getNameIndex($i);
							//echo $filename;
							$fileinfo = pathinfo($filename);
							//debug($fileinfo);
							$fileTemp = explode(' ', $fileinfo['filename']);
							$fileTemp[0] = str_replace("_", " ", $fileTemp[0]);
							//debug($fileTemp);
							$key = '';
							for ($int=2; $int < count($fileTemp); $int++) { 
								$key = $key.' '.$fileTemp[$int];
							}
							//echo count($fileTemp).'<br />'.$key;
							//die;
							$colour = array(
										'code' => $fileTemp[1],
										'name' => $fileTemp[0],
										'key' => $key,
										'pict' => $filename
										);
										
							if($this->Colour->saveAll($colour)){
								
								$prodCol = array(
											'product_id' => $id,
											'colour_id' => $this->Colour->getInsertID() 
											);
											
								if($this->ColoursProduct->saveAll($prodCol)){
									//echo 'save<br />';
								} else {
									echo 'tak save all colour product';
									die;
								}
								
							} else {
								echo 'tak save all colour';
								die;
							}
							
					        $zip->extractTo('img/produk/warna/', array($filename));
							
					    }
						
					    $zip->close();
					    $this->Image->remove_file($unique_name5, 'img/produk/warna');
						
						//debug($colour); 
					} else {
						echo 'gagal zip';
						die;
					}
					
				}

				if($this -> request -> data['Product']['colour_pdf_baru']){
					$this -> Image -> copy_file($unique_name6, $file_type6, 'img/produk/pdf', $temp6);
					$this->Image->remove_file($gbr_dulu6, 'img/produk/pdf');
				}
				
				$this->Session->setFlash(__('The product has been saved'), 'flash_success');
				$this->redirect(array('action' => 'edit_3', $id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}
		
		$this->Product->recursive = -1;
		$category_sub = $this->Product->find('first', array(
							'conditions' => array('Product.id' => $id),
							'fields' => array('Product.category_sub_id')
							));
							
		$produkTerkait = $this->Product->find('all', array(
								'fields' => array('id', 'name', 'main_pict'),
								'conditions' => array(
												//'Product.category_sub_id' => $category_sub['Product']['category_sub_id'],
												'Product.id !=' => $id,
												)
								));
		
		$tutorial = $this->Product->find('all', array(
								'fields' => array('id', 'name', 'main_pict'),
								'conditions' => array(
												'Product.category_sub_id' => $category_sub['Product']['category_sub_id'],
												'Product.id !=' => $id,
												)
							));

		$categories = $this->Category->find('list');
		$categorySubs = array(
							'' => '-- Pilih Sub Kategori --'
							);

		$products = $this->Product->find('list');
		
		$this->set(compact('produkTerkait', 'tutorial', 'categories', 'categorySubs', 'products'));
		
	}

/**
 * add#3 method
 *
 * @return void
 */
	public function edit_3($id = null) {
		$this->set('title_for_layout', 'Edit Produk - Katalog');
		$this->set('page_katalog', 'produk');
		
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$this->uses = array(
						'SellingUnit',
						'SellingUnitsColour'
						);
						
		$this->SellingUnit->recursive = -1;
		$selling_units = $this->SellingUnit->find('all', array(
							'fields' => array('SellingUnit.id', 'SellingUnit.name', 'SellingUnit.old_price', 'SellingUnit.new_price', 'count(SellingUnitsColour.id) as "set"', 'SellingUnit.discount'),
							'joins' => array('LEFT JOIN selling_units_colours as SellingUnitsColour ON(SellingUnit.id = SellingUnitsColour.selling_unit_id)'),
							'group' => array('SellingUnitsColour.selling_unit_id'),
							'conditions' => array('SellingUnit.product_id' => $id)
							));
		$this->set(compact('selling_units', 'id'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}

		$this->uses = array(
						'Product',
						'Colour',
						'ColoursProduct',
						'SellingUnit',
						'SellingUnitsColour'
						);

		$data = $this->Product->find('first', array(
					'conditions' => array('Product.id' => $id), 
					'fields' => array(
									'Product.main_pict', 
									'Product.sub_pict1', 
									'Product.sub_pict2', 
									'Product.sub_pict3', 
									'Product.sub_pict4', 
									'Product.colour_pdf'
									)
						));
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			$this->Session->setFlash(__('Invalid product'), 'flash_note');
			$this->redirect(array('action' => 'index'));
		}
		
		$prod = $this->Product->read(null, $id);
		
		if ($this->Product->delete($id, true)) {
			
			for($i = 0; $i < count($prod['Colour']); $i++){
				$this->Colour->deleteAll(array(
						'Colour.id' => $prod['Colour'][$i]['id']
						), 
						false
				);
			 	$this->Image->remove_file($prod['Colour'][$i]['pict'], 'img/produk/warna');
			}
			
			//$this->Product->ColoursProduct->deleteAll(array('Product.product_id' => $id), true);
			
			//$this->SellingUnit->SellingUnitsColour->deleteAll(array('SellingUnit.product_id' => $id), true);
			
			/*$this->Product->ColoursProduct->deleteAll(array(
						'Product.product_id' => $id
					));
			*/
			
			if($data['Product']['main_pict']){
				$this->Image->remove_file($data['Product']['main_pict'], 'img/produk/main');
			}
			
			if($data['Product']['sub_pict1']){
				$this->Image->remove_file($data['Product']['sub_pict1'], 'img/produk/sub');
			}

			if($data['Product']['sub_pict2']){
				$this->Image->remove_file($data['Product']['sub_pict2'], 'img/produk/sub');
			}
			
			if($data['Product']['sub_pict3']){
				$this->Image->remove_file($data['Product']['sub_pict3'], 'img/produk/sub');
			}
			
			if($data['Product']['sub_pict4']){
				$this->Image->remove_file($data['Product']['sub_pict4'], 'img/produk/sub');
			}

			if($data['Product']['colour_pdf']){
				$this->Image->remove_file($data['Product']['colour_pdf'], 'img/produk/pdf');
			}
			
			$this->Session->setFlash(__('Product deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}

/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_brand_catalogue(){
		$this->uses = array(
						'BrandCatalogue', 
						);
		
		$brandCatalogues = $this->BrandCatalogue->find('list', 
				array(
					'conditions' => array('BrandCatalogue.brand_id' => $_POST['brand_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Katalog Brand --'
							);
							
		foreach ($brandCatalogues as $key => $value) {
			$result[$i] = array(
							'id' => $key,
							'name' => $value
							);
			$i++;
		}

		$data = array(
				'data' => $result
				);
		echo json_encode($data);
		die;
	}

/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_brand_sub_catalogue(){
		$this->uses = array(
						'BrandSubCatalogue', 
						);
		
		$brandSubCatalogues = $this->BrandSubCatalogue->find('list', 
				array(
					'conditions' => array('BrandSubCatalogue.brand_catalogue_id' => $_POST['brandCatalogue_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Sub Katalog Brand --'
							);
							
		foreach ($brandSubCatalogues as $key => $value) {
			$result[$i] = array(
							'id' => $key,
							'name' => $value
							);
			$i++;
		}

		$data = array(
				'data' => $result
				);
		echo json_encode($data);
		die;
	}

/**
 * mendapatkan katalog brand method
 *
 * @param string $id [POST]
 * @return brand_catalogue_id
 */	
	public function get_category_sub(){
		$this->uses = array(
						'CategorySub', 
						);
		
		$subCategory = $this->CategorySub->find('list', 
				array(
					'conditions' => array('CategorySub.category_id' => $_POST['categorySub_id'])
					));
		
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Sub Kategori --'
							);
							
		foreach ($subCategory as $key => $value) {
			$result[$i] = array(
							'id' => $key,
							'name' => $value
							);
			$i++;
		}

		$data = array(
				'data' => $result
				);
		echo json_encode($data);
		die;
	}

/**
 * mendapatkan produk method
 *
 * @param string $id [POST]
 * @return product
 */	
	public function get_products(){
		$this->uses = array(
						'Product'
						);
		$products = $this->Product->find('list', 
				array(
					'conditions' => array('Product.category_sub_id' => $_POST['categorySub_id'])
					));
					
		$i = 1;
		$result[0] = array(
							'id' => '',
							'name' => '-- Pilih Produk --'
							);
		foreach ($products as $key => $value) {
			$result[$i] = array(
							'id' => $key,
							'name' => $value
							);
			$i++;
		}

		$data = array(
				'data' => $result
				);
		echo json_encode($data);
		die;
	}

}
