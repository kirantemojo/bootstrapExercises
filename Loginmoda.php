<?php
require_once('Dbcreation.php');
class Loginmoda extends Dbcreation
{
	function __construct()
	{
		parent::__construct();
	}
	function select_user($user,$pass)
	{
		$sql="SELECT name,pass FROM users AS u WHERE u.name ='{$user}' AND u.pass='{$pass}'";
		return $sql;
	}
	function select_admin($admin,$apass)
	{
		$sql="SELECT name,pass FROM admin AS a WHERE a.name ='{$admin}' AND a.pass='{$apass}'";
		return $sql;
	}
}
