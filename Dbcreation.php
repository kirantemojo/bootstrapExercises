<?php
require_once('DBConnect.php');
require_once('settings.php');
class Dbcreation
{
	protected $db;
	function __construct()
	{
		$this->db = new DBConnect();
		if($this->db->connect_errno > 0){
			die('Unable to connect to database [' . $this->db->connect_error . ']');
		}
	}
	function users()
	{
$sql=<<<SQL
	CREATE TABLE 
	users (user_id INT NOT NULL AUTO_INCREMENT,name VARCHAR(20) NOT NULL,
	pass VARCHAR(20) NOT NULL,PRIMARY KEY(user_id));
SQL;
		return $sql;
	}
	function admin()
	{
$sql=<<<SQL
	CREATE TABLE 
	admin (admin_id INT NOT NULL AUTO_INCREMENT,name VARCHAR(20) NOT NULL,
	pass VARCHAR(20) NOT NULL,PRIMARY KEY(admin_id));
SQL;
		return $sql;
	}
	function data_creation()
	{
		if(!$result = self::$this->db->query(self::users()))
		{
			die("Error in Running the user Database [".$this->db->error."]");
		}
		if(!$result = self::$this->db->query(self::admin()))
		{
			die("Error in Running the admin Database [".$this->db->error."]");
		}
	}
}