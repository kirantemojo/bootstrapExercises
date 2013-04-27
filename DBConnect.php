<?php
class DBConnect extends mysqli
{
	public $host,$user,$pass,$database;
	function __construct()
	{
		/*
		$root = $_SERVER['DOCUMENT_ROOT'];
		$subject = $_SERVER['PHP_SELF'];
		$pattern = '/\/\w+/';
		preg_match($pattern,$subject,$matches,PREG_OFFSET_CAPTURE);
		if(empty($matches[0][0]))
		{
			exit("Site name should be only in word characters");
		}
		else
		{
		*/
			define("ROOT","config.ini");
			$config_array = parse_ini_file(ROOT,true);
		/*
		}
		*/
		$this->host = $config_array['dbs']['host'];
		$this->user = $config_array['dbs']['user'];
		$this->pass = $config_array['dbs']['pass'];
		$this->database = $config_array['dbs']['database'];
		parent::__construct($this->host,$this->user,$this->pass,$this->database);
	}
}

