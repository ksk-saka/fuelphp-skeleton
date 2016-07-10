<?php

/**
 * The Contact Controller.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 * @extends   Controller_Template
 */
class Controller_Contact extends Controller_Template
{
	/**
	 * The index action.
	 *
	 * @access  public
	 */
	public function action_index()
	{
		$data = array(
			'name'		=> Input::post('name'),
			'email'		=> Input::post('email'),
			'tel'		=> Input::post('tel'),
			'content'	=> Input::post('content'),
		);
		$this->template->title = __('title.contact/index');
		$this->template->content = View::forge('contact/index', $data);
	}
}
