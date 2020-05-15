<?php

class Model
{	
    public $pdo;

    public function __construct(){        
        require "./config.php";
        $this->pdo = $pdo;
    }

	public function get_data()
	{
		// todo
	}
}