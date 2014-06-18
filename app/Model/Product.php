<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Brand $Brand
 * @property BrandCatalogue $BrandCatalogue
 * @property BrandSubCatalogue $BrandSubCatalogue
 * @property Category $Category
 * @property CategorySub $CategorySub
 * @property CategorySub $CategorySub
 * @property Colour $Colour
 */
class Product extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'brand_sub_catalogue_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				'message' => 'Sub Katalog Brand tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category_sub_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				'message' => 'Sub Kategori tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nama tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'desc' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Deskripsi tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'template' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Template tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'main_pict' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Gambar tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'extension' => array(
				'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
				'message' => 'Masukkan file image dengan extensi yang benar.',
			),
		),
		'sub_pict1' => array(
			'extension' => array(
				'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
				'message' => 'Masukkan file image dengan extensi yang benar.',
				'allowEmpty' => true,
			),
		),
		'sub_pict2' => array(
			'extension' => array(
				'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
				'message' => 'Masukkan file image dengan extensi yang benar.',
				'allowEmpty' => true,
			),
		),
		'sub_pict3' => array(
			'extension' => array(
				'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
				'message' => 'Masukkan file image dengan extensi yang benar.',
				'allowEmpty' => true,
			),
		),
		'sub_pict4' => array(
			'extension' => array(
				'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
				'message' => 'Masukkan file image dengan extensi yang benar.',
				'allowEmpty' => true,
			),
		),
		'colour' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'File tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'extension' => array(
				'rule' => array('extension', array('zip')),
				'message' => 'Masukkan file zip dengan extensi yang benar.',
			),
		),
		'colour_pdf' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'File tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'extension' => array(
				'rule' => array('extension', array('pdf')),
				'message' => 'Masukkan file pdf dengan extensi yang benar.',
			),
		),
		'product_terkait1' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_terkait2' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tutorial1' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tutorial2' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tutorial3' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BrandSubCatalogue' => array(
			'className' => 'BrandSubCatalogue',
			'foreignKey' => 'brand_sub_catalogue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CategorySub' => array(
			'className' => 'CategorySub',
			'foreignKey' => 'category_sub_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SellingUnit' => array(
			'className' => 'SellingUnit',
			'foreignKey' => 'product_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => true,
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);	

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Colour' => array(
			'className' => 'Colour',
			'joinTable' => 'colours_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'colour_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'CategorySub' => array(
			'className' => 'CategorySub',
			'joinTable' => 'category_subs_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'category_sub_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
