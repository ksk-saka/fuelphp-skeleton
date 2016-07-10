<?php

/**
 * The Contact Form.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 */
class Contact_Form
{
	protected static $validation = null;
	
	public static function forge()
	{
		return new static();
	}
	
	public function __construct()
	{
		static::$validation = Model_Contact::validation();
	}
	
	public function validate()
	{
		static::$validation->add_callable('Validationrules');
		
		static::$validation
				->field('email')
				->add_rule('required_which', 'tel')
				->add_rule('valid_email');
		
		static::$validation
				->field('tel')
				->add_rule('required_which', 'email')
				->add_rule('valid_string', array('numeric'));
		
		return static::$validation->run();
	}
	
	public function errors()
	{
		$errors = array();
		foreach(static::$validation->error() as $key => $e)
		{
			$errors[$key] = $e->get_message();
		}
		return $errors;
	}
}
