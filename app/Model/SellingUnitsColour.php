<?php
App::uses('AppModel', 'Model');
/**
 * SellingUnitsColour Model
 *
 * @property SellingUnit $SellingUnit
 * @property Colour $Colour
 */
class SellingUnitsColour extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'selling_unit_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'colour_id' => array(
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
		'SellingUnit' => array(
			'className' => 'SellingUnit',
			'foreignKey' => 'selling_unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Colour' => array(
			'className' => 'Colour',
			'foreignKey' => 'colour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
