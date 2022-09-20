<?php

namespace classes;

class Db
{
	protected $connect;
	private $host = "localhost";
	private $username = 'root';
	private $password = '';
	private $database = 'finalTask';

	public function __construct()
	{
		 $this->database_connect();

	}

	public function database_connect()
	{
		$this->connect = new \mysqli($this->host, $this->username, $this->password, $this->database);
	}


}



