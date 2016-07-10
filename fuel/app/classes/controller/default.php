<?php

/**
 * The Default Controller.
 *
 * @package   app
 * @author    ksk-saka
 * @license   MIT License
 * @copyright ksk-saka
 * @extends   Controller_Template
 */
class Controller_Default extends Controller_Template
{
	/**
	 * The index action.
	 *
	 * @access  public
	 */
	public function action_index()
	{
		$this->template->title = __('title.default/index');
		$this->template->content = View::forge('default/index');
	}
	
	/**
	 * The 403 action.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_403()
	{
		return Response::forge(View::forge('default/403'), 403);
	}
	
	/**
	 * The 404 action.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(View::forge('default/404'), 404);
	}
	
	/**
	 * The 500 action.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_500()
	{
		return Response::forge(View::forge('default/500'), 500);
	}
}
