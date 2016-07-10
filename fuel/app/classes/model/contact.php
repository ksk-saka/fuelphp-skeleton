<?php

/**
 * The Contact Model.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 * @extends   Model_Base
 */
class Model_Contact extends Model_Base
{
	public static function validation($fieldset = 'default')
    {
		$validation = Validation::forge($fieldset);
		$validation->add_field(
				'name',
				__('label.name'),
				'trim|required|max_length[25]'
		);
		$validation->add_field(
				'email',
				__('label.email'),
				'trim|max_length[50]'
		);
		$validation->add_field(
				'tel',
				__('label.tel'),
				'trim|max_length[50]'
		);
		$validation->add_field(
				'content',
				__('label.content'),
				'trim|max_length[255]'
		);
		return $validation;
	}
}
