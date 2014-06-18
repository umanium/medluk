<?php
App::uses('AppModel', 'Model');
/**
 * CategorySubsProduct Model
 *
 * @property CategorySub $CategorySub
 * @property Product $Product
 */
class CategorySubsProduct extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'category_sub_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category_sub_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
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
		'CategorySub' => array(
			'className' => 'CategorySub',
			'foreignKey' => 'category_sub_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
