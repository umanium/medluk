<?php
App::uses('AppModel', 'Model');
/**
 * ColoursKey Model
 *
 * @property Colour $Colour
 * @property Key $Key
 */
class ColoursKey extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'key_id' => array(
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
		'Colour' => array(
			'className' => 'Colour',
			'foreignKey' => 'colour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Key' => array(
			'className' => 'Key',
			'foreignKey' => 'key_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
