<?php
require_once('Logincona.php');
class Loginviewa extends Logincona
{
	function __construct()
	{
		parent::__construct();
	}
	function login($admin,$pass)
	{
		if((isset($admin)) && (isset($pass)))
		{
			parent::control_view($admin,$pass);
			$row = $this->db->affected_rows;
			if($row>0)
			{
				if(empty($_SESSION))
				{
					session_start();
					$_SESSION['access'] = session_id();
					$res = $this->result->fetch_object();
					
					print('
					<form id="userlogout" class="form-inline pull-right padd-rigt" method="GET">
						 <input id="out" type="hidden" name="out" value="out"> 
						<input id="sublogt" type="submit" class="btn" value="LogOut">
					</form> 

					');
					
					/*$res->name;
					header("Location:index.php");
					*/
					
				}
				else
				{	
					echo "Already Some Other User is Logged In";
				}
			}
			else
			{
				echo "Not an Authenticated User";
			}
		}
	}
	function logout()
	{
		session_start();
		if(!empty($_SESSION))
		{
			session_unset();
			@session_destroy();
			
			//var_dump($_SESSION);
			
			//header("Location:index.php");
			
			print('
					<div class="span3 pull-left">
				<button type="submit" class="btn btn-primary">Sign Up</button> &nbsp;  <i><b> If Not Registered Yet..?</b></i> 
			</div>
			<form id="userlogin" class="form-inline pull-right padd-rigt" method="GET">
			  <input id="user" type="text" class="input-medium" placeholder="Email" name="user">&nbsp;&nbsp;
			  <input id="userpass" type="password" class="input-medium" placeholder="Password" name="userpass">&nbsp;&nbsp;
			  <label class="checkbox">
				<input type="checkbox"> Remember me
			  </label>&nbsp;&nbsp;
			  <button id="submit" type="submit" class="btn">Sign in</button>
			</form>
					');
			
		}
		else
		{
			
			header("Location:index.php");
			
		}
	}
}
$log = new Loginviewa();
if(isset($_GET['user']) && !empty($_GET['user'])  && !empty($_GET['userpass']) && isset($_GET['userpass']))
{
	$log->login($_GET['user'],$_GET['userpass']);
}
if(isset($_GET['out']) && !empty($_GET['out']))
{
	$log->logout();
}