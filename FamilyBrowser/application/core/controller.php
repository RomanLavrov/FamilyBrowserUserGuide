<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
		session_start();
	}
	
	function action_index()
	{
		// todo	
	}
}
?>