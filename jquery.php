<?php
	$error[0] = "Error occurred in Request";
	$error[1] = "Error occurred in Request for post";
	if($_POST['set'] == "jquery")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "jqui")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "jquimob")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "jqunit")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "jmouse")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else
	{
		echo  json_encode($error);
	}
?>