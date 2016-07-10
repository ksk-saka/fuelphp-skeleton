<?php

/**
 * The Contact Me Controller.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 * @extends   Controller_Template
 */
class Controller_Contact_Me extends Controller_Template
{
	/**
	 * The index action.
	 *
	 * @access  public
	 */
	public function post_index()
	{
		$form = Contact_Form::forge();
		if ($form->validate())
		{
			$this->template->title = __('title.contact/me');
			$this->template->content = View::forge('contact/me', Input::post());
		}
		else
		{
			Session::set_flash('error', $form->errors());
			$this->template->title = __('title.contact/index');
			$this->template->content = View::forge('contact/index', Input::post());
		}
	}
	
	/**
	 * The thanks action.
	 *
	 * @access  public
	 */
	public function post_thanks()
	{
		$content = Model_Contact::forge(Input::post());
		if ( ! $content->save())
	    {
			throw new HttpServerErrorException;
		}
		$this->template->title = __('title.contact/me/thanks');
		$this->template->content = View::forge('contact/me/thanks');
	}
}
