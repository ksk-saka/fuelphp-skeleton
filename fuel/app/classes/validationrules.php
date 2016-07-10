<?php

/**
 * The Validation Rules.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 */
class Validationrules
{
	public static function _validation_required_which($val, $field)
	{
	  $valid = Validation::active();
	  
	  if ($valid->_empty($valid->input($field)) and $valid->_empty($val)) {
		return false;
	  }
	  
	  if (!$valid->_empty($valid->input($field)) and !$valid->_empty($val)) {
		return false;
	  }
	  
	  return true;
	}
}
