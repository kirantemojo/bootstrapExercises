<?php
require_once('Loginconp.php');
class Loginviewp extends Loginconp
{
	function __construct()
	{
		parent::__construct();
	}
	function login($admin,$pass)
	{
		parent::control_view($admin,$pass);
		$row = $this->db->affected_rows;
		if($row>0)
		{
			$res = $this->result->fetch_object();
			return $res->name;
		}
		else
		{
			return "Not an Authenticated User";
		}
	}
}
$log = new Loginviewp();
if((isset($_GET['user'])) && (isset($_GET['userpass'])))
{
	echo $log->login($_GET['user'],$_GET['userpass']);
}