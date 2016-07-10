<?php

/**
 * The Base Model.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 * @extends   Orm\Model
 */
class Model_Base extends Orm\Model
{	
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events'			=> array('before_insert'),
			'mysql_timestamp'	=> true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events'			=> array('before_save'),
			'mysql_timestamp'	=> true,
		),
	);
}
