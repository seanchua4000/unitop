<?php
class Base
{
	public function view($view)
	{
		require_once('/../views/' . $view . '.php');
	}
}